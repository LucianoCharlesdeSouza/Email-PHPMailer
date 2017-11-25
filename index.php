<!DOCTYPE html>
<html>
    <head>
        <title>Envio de email com PHPMailer</title>
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="well well-sm">
                        <form method="post" name="form_contato" id="form_contato" action="enviar_email.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Nome">
                                            Nome</label>
                                        <input type="text" class="form-control" id="nome" placeholder="Nome" required="required" name="nome" />
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                            </span>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="subject">
                                            Contatar</label>
                                        <select id="opcao" name="opcao" class="form-control" required="required">
                                            <option value="Vendedor" selected="">Vendedor:</option>
                                            <option value="Compras">Compras</option>
                                            <option value="sugestao">Sugestão</option>
                                            <option value="duvidas">Duvidas</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="Menssagem">
                                            Messagem</label>
                                        <textarea name="messagem" name="menssagem" id="messagem" class="form-control" rows="9" cols="25" required="required"
                                                  placeholder="Messagem"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary pull-right" name="enviar" id="enviar">
                                        Enviar Formulário</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


            </div>
    </body>
</html>


