 <?php
    class ConexionDB
    {
        private $host;
        private $user;
        private $password;
        private $db;

        public function __construct($host ="edusystendb.cd6l3kpvdycv.us-east-1.rds.amazonaws.com",$user = "armagedon",$password = "admindb1234",$db = "edusystemdb")
        {
            $this->host      = $host;
            $this->user      = $user;
            $this->password  = $password;
            $this->db        = $db;
           
        }
        public function EstablecerConexion()
        {
           
            $conexion = new mysqli($this->host,$this->user,$this->password,$this->db);
            error_reporting(0);

            if ($conexion->connect_errno) {
                echo "Oops,Parece que ha ocurrido un error";
            }
            return $conexion;
        }
        
    
        function __destruct()
        {
            mysqli_close($this->EstablecerConexion());
        }

        
    }
    ?>