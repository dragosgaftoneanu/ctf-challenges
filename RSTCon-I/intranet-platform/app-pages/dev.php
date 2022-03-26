                        <h4 class="widgettitle">Happy new year from your awesome IT department!</h4>
                        <div class="widgetcontent">
                           <em>Postat de it@awesomecompany.com pe Oct-21-2020 la 00:00 UTC</em><br /><br />
						   - moved the MySQL production and QA databases from DC-1 domain controller to our AWS instance<br />
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
                        </div>
                        <h4 class="widgettitle">SQL injection vulnerability update</h4>
                        <div class="widgetcontent">
                           <em>Postat de it@awesomecompany.com pe Oct-13-2020 la 23:01 UTC</em><br /><br />
						   - following the disclosure on the SQL injection on our intranet platform, we are happy to say that the issue has been resolved and has not impacted our company's internal database<br />
						   - the issue was related to the incorrect sanitization of "page" query parameter which offered the possibility to query the public database
                        </div>
                        <h4 class="widgettitle">SQL injection vulnerability</h4>
                        <div class="widgetcontent">
                           <em>Postat de it@awesomecompany.com pe Oct-13-2020 la 14:23 UTC</em><br /><br />
						   - we have received information about an SQL injection vulnerability inside our intranet platform<br />
						   - we are currently investigating this vulnerability and will update you as soon as we have further details
                        </div>
                        <h4 class="widgettitle">Welcome to Awesome Company's intranet</h4>
                        <div class="widgetcontent">
                           <em>Postat de it@awesomecompany.com pe Oct-3-2020 la 14:23 UTC</em><br /><br />
						   - after several months of coding, we are happy to say that the platform is now up and running!
                        </div>