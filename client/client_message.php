<?php include('header.php'); ?>

<section id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <div class="list-group">
          <a href="#" class="list-group-item active main-color-bg">
            <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Account
          </a>
          <a href="client_home.php" class="list-group-item"><span class="fa fa-home" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Acceuil</a>
          <a href="client.php" class="list-group-item"><span class="fa fa-credit-card" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Reservation</a>
          <a href="ma_compte.php" class="list-group-item"><span class="fa fa-gear" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Rendez-vous</a>
          <a href="client_message.php" class="list-group-item" style="background-color: #f4f4f4;"><span class="fa fa-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Écrire un message</a><br>
          <a href="#" class="list-group-item active main-color-bg">
            <span class="fa fa-bed" aria-hidden="true"></span>&nbsp;&nbsp;Tarifs
          </a>
          <div class="well">
            <p>• <b>L’Amphithéâtre</b> - 2 399.00.</p>
            <p>• <b>L'ATELIER DU CLUB</b> - 2 399.00</p>
            <p>• <b>Le Club des Légendes</b> - 1,199.00</p>
            <p>• <b>Le Carré VIP</b> - 1,799.00</p>
          </div>
        </div>
      </div>

      <div class="col-md-9">
        <!-- Website Overview -->
        <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h3 class="panel-title fa fa-send">&nbsp;&nbsp;Écrire un message</h3>
          </div><br>

          <div class="container">
            <div class="row">
              <font face="century gothic">
                <p style="margin-left: 190px">Contactez nous, si vous avez des questions.</p>
              </font>
              <div class="col-md-8">
                <form class="form-horizontal" action="client_message_db.php" method="post"><br><br>
                  <p><b>Email</b></p>
                  <input type="email" class="form-control" name="email" value="" required=""><br>
                  <p><b>Message</b></p>
                  <input type="textbox" class="form-control" name="mess" placeholder="Inserer votre message" required="">
                  <div class="form-group"><br><br>
                    <label style="color: #24303C ; margin-top: 7px; margin-left: 500px">
                      <?php
                      if (isset($_GET['msg'])) {
                        echo $_GET['msg'];
                      }
                      ?>
                    </label>
                    <button class="btn btn-primary pull-right" id="create">Envoyer</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<br><br><br>
<footer id="footer" style="height: 86px;">
  <p>© 2020 Les seminaires du club, Tous droits réservés</p>
</footer>

<!-- Modals -->

<!-- Add Page -->
<div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Ajouter un page</h4>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Titre de page</label>
            <input type="text" class="form-control" placeholder="Page Title">
          </div>
          <div class="form-group">
            <label>Body</label>
            <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox"> Publié
            </label>
          </div>
          <div class="form-group">
            <label>Balises Meta</label>
            <input type="text" class="form-control" placeholder="Add Some Tags...">
          </div>
          <div class="form-group">
            <label>Meta Description</label>
            <input type="text" class="form-control" placeholder="Add Meta Description...">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </form>
    </div>
  </div>
</div>

<script>
  CKEDITOR.replace('editor1');
</script>
</body>

</html>


      <section id="main">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="list-group">
                <a href="#" class="list-group-item active main-color-bg">
                  <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>&nbsp;&nbsp;Account
                </a>
                <a href="client_home.php" class="list-group-item"><span class="fa fa-home"
                    aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Acceuil</li></a>
                <a href="client.php" class="list-group-item"><span class="fa fa-credit-card"
                    aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Reservation</li></a>
                <a href="ma_compte.php" class="list-group-item"><span class="fa fa-gear"
                    aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Rendez-vous</li></a>

                <a href="client_message.php" class="list-group-item" style="background-color: #f4f4f4;"><span
                    class="fa fa-pencil" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;Écrire un message</a><br>

                <a href="#" class="list-group-item active main-color-bg">
                  <span class="fa fa-bed" aria-hidden="true"></span>&nbsp;&nbsp;Tarifss
                </a>
                <div class="well">
                  <p>• <b>L’Amphithéâtre</b> - 2 399.00.</p>
                  <p>• <b>L'ATELIER DU CLUB</b> -2 399.00</p>
                  <p>• <b>Le Club des Légendes</b> -1,199.00</p>
                  <p>• <b>Le Carré VIP</b> -1 , 799.00</p>
                </div>
              </div>


            </div>


            <div class="col-md-9">
              <!-- Website Overview -->
              <div class="panel panel-default">
                <div class="panel-heading main-color-bg">


                  <h3 class="panel-title fa fa-send">&nbsp;&nbsp;Écrire un message</h3>

                </div><br>


                <div class="container">
                  <div class="row">
                    <font face="century gothic">
                      <p style="margin-left: 190px">Contactez nous , si vous avez des questions.</p>
                    </font>
                    <div class="col-md-8">

                      <form class="form-horizontal" action="client_message_db.php" method="post"><br><br>
                        <p><b>Email</p></b>
                        <input type="email" class="form-control" name="email" value="" required=""><br>
                        <p><b>Message</p></b>
                        <input type="textbox" class="form-control" name="mess" placeholder="Inserer votre message"
                          required="">
                        <div class="form-group"><br><br>
                          <label style="color: #24303C ; margin-top: 7px; margin-left: 500px">
                            <?php
                            if (isset($_GET['msg'])) {
                              echo $_GET['msg'];
                            }
                            ?>
                          </label>
                          <button class="btn btn-primary pull-right" id="create">Envoyer </button>
                        </div>

                    </div>

      </section>
      <br><br><br>
      <footer id="footer" style="height: 86px;">
        <p>© 2020 Les seminaires du club , Tous droits réservés</p>
      </footer>


      <!-- Modals -->

      <!-- Add Page -->
      <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form>
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Ajouter un page </h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Titre de page</label>
                  <input type="text" class="form-control" placeholder="Page Title">
                </div>
                <div class="form-group">
                  <label>Body</label>
                  <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Publié
                  </label>
                </div>
                <div class="form-group">
                  <label>Balises Meta</label>
                  <input type="text" class="form-control" placeholder="Add Some Tags...">
                </div>
                <div class="form-group">
                  <label>Meta Description</label>
                  <input type="text" class="form-control" placeholder="Add Meta Description...">
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <script>
        CKEDITOR.replace('editor1');
      </script>
    </font>
  </body>

  </html>