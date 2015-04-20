<?php $this->load->view('globals/header'); ?>
<div class="row " style="padding-top:40px;">
	
    <h3 class="text-center" >BOOTSTRAP CHAT EXAMPLE </h3>
    <br /><br />
    <div class="col-md-8">
        <div class="panel panel-info">
            <div class="panel-heading">
                RECENT CHAT HISTORY
            </div>
            <div class="panel-body">
<ul id="chatMessages" class="media-list">
							<?php //var_dump($chat);?>
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
     
                                </ul>
            </div>
            <div id="divchat">
	<?= form_create("Chat",
			[
				"auteur"=>"text",
				"contenu"=>"textarea",
				"valider"=>"submit"
			]); ?>
</div>
            <div class="panel-footer">
                <!--<div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter Message" />
                                    <span class="input-group-btn">
                                        <button class="btn btn-info" type="button">SEND</button>
                                    </span>
                                </div>-->
            </div>
        </div>
    </div>
    <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
               ONLINE USERS
            </div>
            <div class="panel-body">
                <ul class="media-list">

                                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Alex Deo | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Jhon Rexa | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Alex Deo | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Jhon Rexa | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Alex Deo | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
     <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Jhon Rexa | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.png" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Alex Deo | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                    <li class="media">

                                        <div class="media-body">

                                            <div class="media">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" style="max-height:40px;" src="assets/img/user.gif" />
                                                </a>
                                                <div class="media-body" >
                                                    <h5>Jhon Rexa | User </h5>
                                                    
                                                   <small class="text-muted">Active From 3 hours</small>
                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                </div>
            </div>
        
    </div>
</div>
  </div>

<?php $this->load->view('globals/footer'); ?>
