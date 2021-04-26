<div id="modal1" class="modal">
      <div class="modal-content">
        <h4>Modif Profile</h4>
            <form action="../actions/updateProfil.php" method="POST"> 
                <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id'] ?>">
                <div class="row center">
                    <div class="col m4 center">
                        </a><img class="imgmod" src="..\img\imgProfil\Chuunbiyo_PP.png" alt="">
                        <p>
                            <label>
                                <input class="with-gap" name="group3" id='group3' type="radio" value="Chuunbiyo_PP.png"  />
                                <span>celle-ci</span>
                            </label>
                        </p>
                    </div>
                    
                    <div class="col m4 center">
                        <img class="imgmod" src="..\img\imgProfil\Kazuma_PP.jpg" alt="">
                        <p>
                            <label>
                                <input class="with-gap" name="group3" id='group3' type="radio" value="Kazuma_PP.jpg"  />
                                <span>celle-ci</span>
                            </label>
                        </p>
                    </div>
                    
                    <div class="col m4 center">
                        <img class="imgmod" src="..\img\imgProfil\Zero_Two_PP.jpg" alt="">
                        <p>
                            <label>
                                <input class="with-gap" name="group3" id='group3' type="radio" value="Zero_Two_PP.jpg"  />
                                <span>celle-ci</span>
                            </label>
                        </p>
                    </div>
                    
                    <div class="col m4 center">
                        <img class="imgmod" src="..\img\imgProfil\Nezuko_PP.jpg" alt="">
                        <p>
                            <label>
                                <input class="with-gap" name="group3" id='group3' type="radio" value="Nezuko_PP.jpg"  />
                                <span>celle-ci</span>
                            </label>
                        </p>
                    </div>
                    
                    <div class="col m4 center">
                        <img class="imgmod" src="..\img\imgProfil\Default.png" alt="">
                        <p>
                            <label>
                                <input class="with-gap" name="group3" id='group3' type="radio" value="Default.png" checked />
                                <span>celle-ci</span>
                            </label>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s1"></div><div class="col s10">
                    <label for="newPseudo">Nouveau Pseudo (laisser vide si vous n'en changez pas)</label>
                    <input name="newPseudo" id="newPseudo" type="text" value="<?php echo $_SESSION['user']['pseudo'] ?>" minlength="4" maxlenght="22">
                </div><div class="col s1"></div>
            </div>
            <button type='submit' class="modal-close waves-effect waves-green btn-flat">Valider</button>
        </form>
        <div class="modal-footer">
    </div>
  </div>