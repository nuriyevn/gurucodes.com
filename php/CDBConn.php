<?php
/*
This library is a wrapper class that manages PGSQL connections.
Designed and implemented by Nusrat Nuriyev. (c) JetPMS 2015
*/


//require_once '../app-config.php';
//require_once(ABSPATH."/php/hostconfig.php");
/*
class CDBConn
{


}
*/

class /*PGConn extends*/ CDBConn
{

    protected $_host;
    protected $_dbname;
    protected $_user;
    protected $_password;
    protected $_dbconn;
    protected $_query;
    protected $_result;
    protected $_already_free;
    protected $_debug;

    public function __construct($host, $dbname, $user, $password, $debug=null)
    {
        //if ($host == "" || $dbname == "" || $user == "" || $password == "")
        // echo "One or more parameters were not specified.<br>";


        $this->_host = $host;
        $this->_dbname = $dbname;
        $this->_user = $user;
        $this->_password = $password;
        $this->_dbconn = 0;
        $this->_query = "";
        $this->_result = 0;
        $this->_already_free = TRUE;
        if (null == $debug)
            $this->_debug = FALSE;
        else
            $this->_debug = $debug;



        if ($this->_debug)
        {
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
        }
    }

    public function turn_on_debug($b)
    {
        $this->_debug = $b;
    }

    public function __destruct()
    {
        if ($this->_debug)
            echo "CDBConn is getting destructed<br>";
        $this->free_result();
        $this->close();
    }

    public function __connect_to_localhost()
    {
        return $this->_dbconn = pg_connect("host=localhost dbname=$this->_dbname user=$this->_user password=$this->_password");
    }

    public function reconnect($new_database, $username=null, $password=null)
    {
        $this->close();
        if (null != $username)
            $this->_user = $username;
        if (null != $password)
            $this->_password = $password;

        $this->connect($new_database);
    }

// setsebool httpd_can_network_connect_db 1
// In case of lack of permission to connect
    public function connect_no_localhost()
    {
        $success = TRUE;
        if ($this->_user == '' || $this->_password == '')
        {
            $success = FALSE;
        }
        else
        {
            $this->_dbconn = pg_connect("host=$this->_host dbname=$this->_dbname user=$this->_user password=$this->_password");

            if ($this->_dbconn == FALSE) {
                echo("Cannot connect." . pg_last_error());
                $success = FALSE;
            }

            if ($this->_debug)
                echo "DB connected to remote host [$this->_host]<br>";
        }
        return $success;
    }

    public function connect()
    {
        $success = TRUE;
        if ($this->_user == '' || $this->_password == '')
        {
            $success = FALSE;
        }
        else if ($this->__connect_to_localhost() == FALSE)
        {
            if (!$this->_dbconn = pg_connect("host=$this->_host dbname=$this->_dbname user=$this->_user password=$this->_password"))
            {
                echo ("Cannot connect.".pg_last_error());
                $success = FALSE;
            }

            if ($this->_debug)
                echo "DB connected to remote host [$this->_host]<br>";
        }
        else
        {
            if ($this->_debug)
                echo "DB connected to localhost<br/>";
        }

        return $success;
    }

    public function getResult()
    {
        return $this->_result;
    }
    public function getQuery()
    {
        return $this->_query;
    }

    public function run_query($query)
    {
        if ($this->_debug)
            echo "Following query is going to be executed: '".$query."'<br>";
        $this->free_result();

        $this->_query = $query;
        $this->_result = pg_query($this->_dbconn, $this->_query);

        if ($this->_result == FALSE)
        {
            echo "Following query '".$query."' cannot be executed.";
            return FALSE;
        }
        else
        {
            $this->_already_free = FALSE;
            return TRUE;
        }
    }

    public function affected_rows()
    {
        if ($this->_already_free == FALSE)
            return pg_affected_rows($this->_result);
        else
        {
            if ($this->_debug == TRUE)
                echo "Result of the query is already free. Can't get number of affected rows.<br/>";
            return 0;
        }
    }

    public function run_select($query)
    {
        if ($this->run_query($query))
        {
            $affected_rows_count = pg_affected_rows($this->_result);
            if ($this->_debug)
                echo "Affected rows count: $affected_rows_count"."<br>";
            return $this->put_result_to_html();
        }
    }

    public function run_insert($query)
    {
        if ($this->run_query($query))
        {
            $affected_rows_count = pg_affected_rows($this->_result);
            if ($this->_debug)
                echo "Affected rows count: $affected_rows_count"."<br>";
            return $affected_rows_count;
        }
        return 0; // TODO Assuming that insert returns 0, when no row has been inserted or updated.
    }

    public function fetch_array()
    {
        return pg_fetch_array($this->_result);
    }

    public function put_result_to_html()
    {
        if ($this->_result != FALSE)
        {
            $html = "<table>\n";
            while ($line = pg_fetch_array($this->_result, null, PGSQL_ASSOC))
            {
                $html .= "\t<tr>\n";
                foreach($line as $col_value)
                {
                    $html .= "\t\t<td>$col_value</td>\n";
                }
                $html .= "\t</tr>\n";
            }

            $html .= "</table>\n";

            return $html;
        }
    }

    public function free_result()
    {
        if ($this->_already_free == FALSE)
        {
            pg_free_result($this->_result);
            $this->_already_free = TRUE;
        }
    }

    public function close()
    {
        $this->free_result();
        pg_close($this->_dbconn);
    }



    public function getConn()
    {
        return $this->_dbconn;
    }

    public function printinfo()
    {

        echo "Host: $this->_host"."<br>";
        echo "Dbname: $this->_dbname"."<br>";
        echo "User: $this->_user"."<br>";
        echo "Password: $this->_password"."<br>";
    }

    public function show_databases()
    {
        return $this->run_select("SELECT datname FROM pg_database WHERE datistemplate = false");
    }

    public function show_tables()
    {
        return $this->run_select("SELECT table_name FROM information_schema.tables WHERE table_schema='public'");
    }

    public function show_columns($table_name)
    {
        return $this->run_select("SELECT * FROM information_schema.columns WHERE table_schema = 'public' AND table_name = '$table_name'");
    }

}
/*
// Database list
"SELECT datname FROM pg_database WHERE datistemplate = false"
// Table list for connected database
"SELECT table_name FROM information_schema.tables WHERE table_schema='public'"
// Columns list in selected table for connected database
"SELECT * FROM information_schema.columns WHERE table_schema = 'public' AND table_name = 'room'"
*/

?>