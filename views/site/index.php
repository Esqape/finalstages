<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\bootstrap\Carousel;

/* @var $this yii\web\View */

$this->title = 'SCMA CMS';
?>
<div class="site-index">

    <div class="" style="text-align:center">
        <h2>CMS for SMCA Interactive Student Handbook</h2>




<div class="slides" style="height:300px;min-height:300px;max-height:300px;max-width:100%;">
        <?php
        

        echo Carousel::widget([
            'items' => [
                ['content' => '<img src="manage.jpg"/>',
                'caption' => '<h4><b>Manage</b></h4><p><b>Manage your content</b></p>',
                'options' => ['style' => 'height:300px;min-height:300px;max-height:300px;max-width:100%;'],
                ],
                ['content' => '<img src="your.png"/>',
                'caption' => '<h4 style="color:#00ff00"><b>Access</b></h4><p style="color:#00ff00"><b>Easy access from anywhere</b></p>',
                'options' => ['style' => 'height:300px;min-height:300px;max-height:300px;max-width:100%;'],
                ],
                [
                    'content' => '<img src="content.jpg"/>',
                    'caption' => '<h4 style="color:#ffffff"><b>Content</b></h4><p style="color:#ffffff"><b>Create content easily</b></p>',
                    'options' => ['style' => 'height:300px;min-height:300px;max-height:300px;max-width:100%'],
                ],
            ],
            'options' => ['style' => ['height:300px;min-height:300px;max-height:300px;max-width:100%;'],],
        ]);
        ?>
</div>

        <?php
        if((Yii::$app->user->isGuest))
        {

            //slideshow
        ?>
        <br>
        <div id=lgbtn>
        <p>
        <a class="btn btn-lg btn-primary" href="index.php\site\login">Get started by logging in</a>
        <?php
        }
        ?>
          </p>
        </div> 
    </div>

 
        <?php
        if((Yii::$app->user->isGuest))
        {
   /* ?>
        <p>Go to the <b>About</b> page for more information.</p>
        

        <?php
        */
        }
        
    ?>


    <div class="body-content" id="cntn">

    <?php
        if(!(Yii::$app->user->isGuest))
        {
    ?>
        <style type="text/css">
            #cntn {
                visibility:visible;
            }
            #lgbtn {
                visibility:hidden;
            }
        </style>

    <?php
        }
        else
        {
    ?>
        <style type="text/css">
            #cntn {
                visibility:hidden;
            }
            #lgbtn {
                visibility:visible;
            }
        </style>
            

    <?php

        }

        if(!(Yii::$app->user->isGuest))
        {

    ?>

        <div class="row">
            <div class="col-lg-4">
                <h2>View Content</h2>

                <p>View all Posts in the system which consists of text,image and video content which is used to drive the Interactive Student Handbook.
                    </p>

                <p><a class="btn btn-info" href="/../yii2test/basic/web/index.php/posts">View Content &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Create Content</h2>

                <p>Create new Posts to the system which consists of text,image and video content which is used to drive the Interactive Student Handbook.
                    </p>

                <p><a class="btn btn-info" href="/../yii2test/basic/web/index.php/posts/create">Create Content &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>User Account Details</h2>

                <p>Your account details including account role, given permissions, details of posts you've created and some account statistics. 
                    </p>

                <p><a class="btn btn-info" href="/../yii2test/basic/web/index.php/site/details">User Account &raquo;</a></p>
            </div>
        </div>

        <?php
        }
        ?>

    </div>
</div>
