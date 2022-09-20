<?php 

    //phpinfo(); 

    class Core 

    { 

        public function start($urlGet) 

        { 

            $acao = 'index.php'; 

            if($urlGet['index.php']) 

            { 

                $controller = ucfirst($urlGet['index.php'].'Control'); 

  

            }  

            else  

            { 

                $controller = 'HomeControl.php'; 

  

            } 

  

            //var_dump($urlGet); 

            if (!class_exists($controller)) 

            { 

                $controller = 'ErroControl.php'; 

            } 

            call_user_func_array(array(new $controller, $acao),array()); 

            echo $controller; 

        } 

          

    } 

?> 