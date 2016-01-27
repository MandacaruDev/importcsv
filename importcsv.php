<html>
    <head>
        <title>Simulado em Rede</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <h1>Importação Concluída</h1>
        <?php   
         include("../connect.php");  
                
            foreach($_FILES["envsimulado"]["tmp_name"] as $nome_arquivo) { 
               
            //$nome_arquivo = $_FILES["envsimulado"]["tmp_name"][$i];
            $objeto = fopen($nome_arquivo, 'r');
            
            while(($dados = fgetcsv($objeto, 1000, ",")) !== FALSE){
               $str = str_replace(",", ".", $dados, $count);
               $sql = "INSERT INTO simrede 
                                 (
                                    codsiem,nmaluno,nmescola,serie,simulado,datacad,
                                    nota1,nota2,nota3,nota4,nota5,nota6,nota7,nota8,
                                    nota9,nota10,nota11,nota12,nota13,nota14,nota15,
                                    nota16,nota17,nota18,nota19,nota20
                                 )
                        VALUES 
                                 (
                                    '$dados[0]','$dados[1]','$dados[2]','$dados[3]','Simulado em rede-1',
                                     CURDATE(),'$str[10]','$str[11]','$$str[12]','$str[13]',
                                    '$str[14]','$str[15]','$str[16]','$str[17]','$str[18]',
                                    '$str[19]','$str[20]','$str[21]','$str[22]','$str[23]',
                                    '$str[24]','$str[25]','$str[26]','$str[27]','$str[28]',
                                    '$str[29]'
                                 )"; 
                                mysql_query($sql) or die(mysql_error());
                                //echo  $sql."br";
                /*echo '<pre>';
                print_r($dados);
                print_r($str);
                echo '</pre>';*/
            }
              fclose($objeto);            
         }
            
            echo "Processo Finalizado.";
        ?>
    </body>
</html>
