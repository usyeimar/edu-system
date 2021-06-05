 <?php
    class ConexionDB
    {
        private $host;
        private $user;
        private $password;
        private $db;

        public function __construct($host ="btktch9ncxiosgnrrrdg-mysql.services.clever-cloud.com",$user = "uzzapspzrzeietyb",$password = "bglB0brGtXCYtqzr9bru",$db = "btktch9ncxiosgnrrrdg")
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