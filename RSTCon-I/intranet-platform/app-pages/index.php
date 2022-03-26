               <div class="row">
                    <div id="dashboard-left" class="col-md-8">                        
                        
                        <h4 class="widgettitle">Ultimele actualizari de la developer</h4>
                        <div class="widgetcontent nopadding">
                            <ul class="commentlist">
                                <li>
                                    <img src="images/photos/thumb2.png" alt="" class="pull-left" />
                                    <div class="comment-info">
                                        <h4>Happy new year from your awesome IT department!</h4>
                                        <p>						   - moved the MySQL production and QA databases from DC-1 domain controller to our AWS instance<br />
						   - switched from using Active Directory login to our new identity provider, Okta<br />
						   - changed authentication method from basic auth to using OpenID Connect implicit flow<br />
						   - created a new logic that would verify the JWTs automatically using the following steps:<br />
						   &nbsp;&nbsp;&nbsp; - verifies the JWT structure<br />
						   &nbsp;&nbsp;&nbsp; - checks for the algorithm to be exactly RS256<br />
						   &nbsp;&nbsp;&nbsp; - checks IAT and EXP claims to that JWT is in proper boundaries<br />
						   &nbsp;&nbsp;&nbsp; - takes the signing keys (n and e) based on the issuer present in JWT<br /> 
						   &nbsp;&nbsp;&nbsp; - verifies the signature based on the signing keys received<br />
						   - updated PHP and Apache<br />
						   &nbsp;&nbsp; <strong>NOTE:</strong> if there are any errors or if you find any vulnerabilities, please let us know through an email to it@awesomecompany.com<br />
</p>
                                    </div>
                                </li>
                                <li>
                                    <img src="images/photos/thumb2.png" alt="" class="pull-left" />
                                    <div class="comment-info">
                                        <h4>SQL injection vulnerability update</h4>
                                        <p>						   - following the disclosure on the SQL injection on our intranet platform, we are happy to say that the issue has been resolved and has not impacted our company's internal database<br />
						   - the issue was related to the incorrect sanitization of "page" query parameter which offered the possibility to query the public database
</p>
                                    </div>
                                </li>
                                <li><a href="dashboard.php?page=dev">Vezi Toate Actualizarile</a></li>
                            </ul>
                        </div>
                        
                        <br />
                        
                        
                    </div><!--col-md-8-->
                    
                    <div id="dashboard-right" class="col-md-4">
                         
                        <h4 class="widgettitle">Calendar Companie</h4>
                        <div class="widgetcontent nopadding">
                            <div id="datepicker"></div>
                        </div>
						 
						 
                        <div class="tabbedwidget tab-primary">
                            <ul>
                                <li><a href="#tabs-1"><span class="iconfa-user"></span></a></li>
                                <li><a href="#tabs-2"><span class="iconfa-star"></span></a></li>
                            </ul>
                            <div id="tabs-1" class="nopadding">
                                <h5 class="tabtitle">Ultimii utilizatori conectati</h5>
                                <ul class="userlist">
                                    <li>
                                        <div>
                                            <img src="images/photos/thumb1.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Draniem Daamul</h5>
                                                <span class="pos">Software Engineer</span>
                                                <span>Last Logged In: 12/20/2019 8:40PM</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="images/photos/thumb2.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Therineka Chonpe</h5>
                                                <span class="pos">Regional Manager</span>
                                                <span>Last Logged In: 12/20/2019 3:30PM</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="images/photos/thumb3.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Zaham Sindilmaca</h5>
                                                <span class="pos">Chief Technical Officer</span>
                                                <span>Last Logged In: 12/19/2019 1:30AM</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="images/photos/thumb4.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Annie Cerona</h5>
                                                <span class="pos">Engineering Manager</span>
                                                <span>Last Logged In: 12/19/2019 11:30AM</span>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="images/photos/thumb5.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Delher Carasbong</h5>
                                                <span class="pos">Software Engineer</span>
                                                <span>Last Logged In: 12/19/2019 11:00AM</span>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div id="tabs-2" class="nopadding">
                                <h5 class="tabtitle">Favoriti</h5>
                                <ul class="userlist userlist-favorites">
                                                                        <li>
                                        <div>
                                            <img src="images/photos/thumb3.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Zaham Sindilmaca</h5>
                                                <p class="link">
                                                    <a href=""><i class="iconfa-envelope"></i> Message</a>
                                                    <a href=""><i class="iconfa-phone"></i> Call</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="images/photos/thumb4.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Annie Cerona</h5>
                                                <p class="link">
                                                    <a href=""><i class="iconfa-envelope"></i> Message</a>
                                                    <a href=""><i class="iconfa-phone"></i> Call</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="images/photos/thumb5.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Delher Carasbong</h5>
                                                <p class="link">
                                                    <a href=""><i class="iconfa-envelope"></i> Message</a>
                                                    <a href=""><i class="iconfa-phone"></i> Call</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="images/photos/thumb1.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Draniem Daamul</h5>
                                                <p class="link">
                                                    <a href=""><i class="iconfa-envelope"></i> Message</a>
                                                    <a href=""><i class="iconfa-phone"></i> Call</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="images/photos/thumb2.png" alt="" class="pull-left" />
                                            <div class="uinfo">
                                                <h5>Therineka Chonpe</h5>
                                                <p class="link">
                                                    <a href=""><i class="iconfa-envelope"></i> Message</a>
                                                    <a href=""><i class="iconfa-phone"></i> Call</a>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div><!--tabbedwidget-->
                        
                        <br />
                                                
                    </div><!-- col-md-4 -->
                </div><!--row-->
				
<script type="text/javascript">
    jQuery(document).ready(function() {
        
        //datepicker
        jQuery('#datepicker').datepicker();
        
        // tabbed widget
        jQuery('.tabbedwidget').tabs();
        
        
    
    });
</script>