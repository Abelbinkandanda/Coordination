<div class="main-sidebar-nav default-navigation">
            <div class="nano">
                <div class="nano-content sidebar-nav">
				
					<div class="card-body border-bottom text-center nav-profile">
						<div class="notify setpos"> <span class="heartbit"></span> <span class="point"></span> </div>
                        <img alt="profile" class="margin-b-10  " src="../assets/img/avtar-2.png" width="80">
                        <p class="lead margin-b-0 toggle-none"><?php echo($_SESSION['user_name']); ?></p>
                        <p class="text-muted mv-0 toggle-none">Welcome</p>						
                    </div>
					
                    <ul class="metisMenu nav flex-column" id="menu">
                        <li class="nav-heading"><span>MAIN</span></li>
						<li class="nav-item active"><a class="nav-link" href="index.php"><i class="fa fa-home"></i> <span class="toggle-none">Dashboard <span class="badge badge-pill badge-danger float-right mr-2"></span></span></a></li>						
                        <li class="nav-heading"><span>INTERFACES</span></li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-table"></i> <span class="toggle-none">Composants <span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">                              
                                <li class="nav-item"><a class="nav-link" href="blog.php">Nos blogs</a></li>					
                                <li class="nav-item"><a class="nav-link" href="section.php">Section</a></li>					
                                <li class="nav-item"><a class="nav-link" href="option.php">Option</a></li>					
                                <li class="nav-item"><a class="nav-link" href="classe.php">Classe</a></li>					
                            </ul>
                        </li>
						
						<li class="nav-item">
                            <a class="nav-link" href="javascript: void(0);" aria-expanded="false"><i class="fa fa-bar-chart"></i> <span class="toggle-none">Operations <span class="fa arrow"></span>  <span class="badge badge-pill badge-success float-right mr-2"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
                                <li class="nav-item"><a class="nav-link" href="eleve.php">Eleve</a></li>
                                <li class="nav-item"><a class="nav-link" href="inscription.php">Inscription</a></li>
                                <li class="nav-item"><a class="nav-link" href="horaire.php">Horaire</a></li>
                            </ul>
                        </li>				
						<li class="nav-heading"><span>PRESENCE</span></li>
						<li class="nav-item">
                            <a class="nav-link"  href="javascript: void(0);" aria-expanded="false"><i class="fa fa-fire"></i> <span class="toggle-none">Presence<span class="fa arrow"></span></span></a>
                            <ul class="nav-second-level nav flex-column sub-menu" aria-expanded="false">
								<li class="nav-item"><a class="nav-link" href="presence.php">Presence</a></li>
                            </ul>
                        </li>					                
                    </ul>
                </div>
            </div>
        </div>