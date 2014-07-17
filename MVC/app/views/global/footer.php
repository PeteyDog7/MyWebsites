            </div>
            <div id="floatContent">
                <div id="socialMedia">
                    <h3>Social Media</h3>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    <a href="https://twitter.com/noahtk7" class="twitter-follow-button" data-show-count="false" data-lang="en">Follow @noahtk7</a>
                </div>
                <hr/>
                <div id="pageCounter">
                    <h3>Page Counter</h3>
                    <p>You have visited this page 
                        <?php
                        if (Session::get('pageSessionCount')!==NULL){
                            echo Session::get('pageSessionCount');
                        }
                        else {
                            echo 'ERROR';
                        }
                        ?>
                    times.</p>
                </div>
            </div>            
            </div>
            <div id="footer">
                <div id="socialMedia">
                    
                </div>
                <nav>
                    <?php if (Session::get('loggedIn') == false): ?>
                    <a href="/website/mvc/public/home">Home</a><p> | </p>
                        <a href="/website/mvc/public/help">Help</a><p> | </p>
                    <?php endif; ?>
                    <?php if (Session::get('loggedIn')): ?>
                        <a href="/website/mvc/public/dashboard/index">Dashboard</a><p> | </p>
                        <?php if (Session::get('role') == 'owner'): ?>
                            <a href="/website/mvc/public/users">Users</a><p> | </p>
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if (Session::get('loggedIn')): ?>
                        <a href="/website/mvc/public/dashboard/logout">Logout</a>
                    <?php else: ?>
                        <a href="/website/mvc/public/login">Login</a>
                    <?php endif; ?>
                </nav>
                <p id="copyright">&#169; 2014 by Noah Kurrack. All rights reserved.</p>
                
            </div>
        </div>
    </body>
</html>