<?php
session_start();
?>
<div id="refresca_cassi_solicitante">
    <script src="../js/jquery-1.11.1.min.js"></script>    
    <link rel="stylesheet" type="text/css" href="../bootstrap/DataTables/media/css/jquery.dataTables.css">
    <style type="text/css" class="init"></style>    
    <script type="text/javascript" language="javascript" src="../bootstrap/DataTables/media/js/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="../bootstrap/DataTables/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" language="javascript" class="init">
        $(document).ready(function () {
            $('#funcionarios').DataTable({"language": {"url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"}});
        });
    </script>    
    <div class="row">
        <div class="col-md-10">
            <div class="widget">
                <div class="widget-header">
                    <h2><strong>Listar </strong>Adesões - Titulares</h2>                    
                </div>
                <div class="widget-content">                    
                    <br>
                    <div class="table-responsive">
                        <form class='form-horizontal' role='form'>
                            <table id="funcionarios" class="display" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>CPF Titular</th>
                                        <th>Telefone</th>                                        
                                        <th>Celular</th>
                                        <th>Cidade</th>
                                        <th>Ação</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>CPF Titular</th>
                                        <th>Telefone</th>                                        
                                        <th>Celular</th>
                                        <th>Cidade</th>
                                        <th>Ação</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    include '../config/database_mysql.php';
                                    $pdo = Database::connect();

                                    function __autoload($file) {
                                        if (file_exists('../Model/' . $file . '.php'))
                                            require_once('../Model/' . $file . '.php');
                                        else
                                            exit('O arquivo ' . $file . ' nÃ£o foi encontrado!');
                                    }

                                    $querie = new Queries();
                                    foreach ($pdo->query($querie->titulares_listar()) as $value) {
                                        echo '<tr>';
                                        echo '<td>' . $value['cpf_titular'] . '</td>';
                                        echo '<td>' . $value['telefone'] . '</td>';
                                        echo '<td>' . $value['celular'] . '</td>';
                                        echo '<td>' . $value['cidade'] . '</td>';
                                        echo '<td><a href="ver_adesao.php?id=' . $value['id'] . '" data-toggle="modal" data-target="#myModal" class="btn btn-default">Ver <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a></td>';
                                        echo '</tr>';
                                    }
                                    Database::disconnect();
                                    ?>
                                </tbody>
                            </table>
                        </form>
                    </div>                    
                    <div class="modal large" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content"></div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>
</div>