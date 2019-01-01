<?php

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>CMS</h1>

        <p class="lead">CMS for SMCA Interactive Student Handbook.</p>

        <div id=lgbtn>
        <p>

        <?php
        if((Yii::$app->user->isGuest))
        {
    ?>
        <a class="btn btn-lg btn-primary" href="index.php\site\login">Get started by logging in</a>
        

        <?php
        }
    ?>
          </p></div> 
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
                visibility:visible;
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
                visibility:hidden;
            }
        </style>
            

    <?php

        }

    ?>

        <div class="row">
            <div class="col-lg-4">
                <h2>View Content</h2>

                <p>View all Posts in the system which consists of text,image and video content which is used to drive the Interactive Student Handbook.
                    </p>

                <p><a class="btn btn-default" href="/../yii2test/basic/web/index.php/posts">View Content &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Create Content</h2>

                <p>Create new Posts to the system which consists of text,image and video content which is used to drive the Interactive Student Handbook.
                    </p>

                <p><a class="btn btn-default" href="/../yii2test/basic/web/index.php/posts/create">Create Content &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>User Account Details</h2>

                <p>Your account details including account role, given permissions, details of posts you've created and some account statistics. 
                    </p>

                <p><a class="btn btn-default" href="/../yii2test/basic/web/index.php/site/details">User Account &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
