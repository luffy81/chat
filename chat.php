<?php include_once 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>chat</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<style type="text/css">
		.chat
		{
		    list-style: none;
		    margin: 0;
		    padding: 0;
		}

		.chat li
		{
		    margin-bottom: 10px;
		    padding-bottom: 5px;
		    border-bottom: 1px dotted #B3A9A9;
		}

		/*.chat li.left .chat-body
		{
		    margin-left: 60px;
		}*/

		/*.chat li.right .chat-body
		{
		    margin-right: 60px;
		}*/


		.chat li .chat-body p
		{
		    margin: 0;
		    color: #777777;
		}

		.panel .slidedown .glyphicon, .chat .glyphicon
		{
		    margin-right: 5px;
		}

		.panel-body
		{
		    /*overflow-y: scroll;*/
		    height: 450px;
		}

		::-webkit-scrollbar-track
		{
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
		    background-color: #F5F5F5;
		}

		::-webkit-scrollbar
		{
		    width: 12px;
		    background-color: #F5F5F5;
		}

		::-webkit-scrollbar-thumb
		{
		    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
		    background-color: #555;
		}

	</style>
</head>
<body>
	<div class="container">
	    <div class="row">
	        <div class="col-sm-6 col-md-4 col-md-offset-4">
	        	<div class="panel panel-default">
	        		<div class="panel-body">
	        			<div class="text-center">
	        				<h4>chat</h4>
	        			</div>
	        			<hr>
	        			<ul class="chat">
	                        <li class="left clearfix">
	                            <div class="chat-body clearfix">
	                                <div class="header">
	                                    <strong class="primary-font">Jack Sparrow</strong> 
	                                   
	                                </div>
	                                <p>
	                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
	                                    dolor, quis ullamcorper ligula sodales.
	                                </p>
	                            </div>
	                        </li>
	                        
	                        <li class="right clearfix">
	                            <div class="chat-body clearfix">
	                                <div class="header">
	                                    <small class=" text-muted"><span class="">&nbsp;</span> </small>
	                                    <strong class="pull-right primary-font">Bhaumik Patel</strong>
	                                </div>
	                                <p>
	                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
	                                    dolor, quis ullamcorper ligula sodales.
	                                </p>
	                            </div>
	                        </li>

	                        <li class="left clearfix">
	                            <div class="chat-body clearfix">
	                                <div class="header">
	                                    <strong class="primary-font">Jack Sparrow</strong> 
	                                   
	                                </div>
	                                <p>
	                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare
	                                    dolor, quis ullamcorper ligula sodales.
	                                </p>
	                            </div>
	                        </li>
	                    </ul>
	        		</div>
	        	</div>
	        </div>
	    </div>
	</div>
</body>
</html>