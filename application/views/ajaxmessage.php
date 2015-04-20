<?php foreach ($chat as $cle=>$value):?>
                                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle " src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
              									<?= $value->contenu ?>
                                                    <br />
                                                   <small class="text-muted"><?= $value->auteur?>|<?=$value->date_msg?></small>
                                                    <hr />
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     
     						<?php endforeach;?>