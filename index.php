 <?php include('inc/header.html'); ?>

		<div class="page">
			<div id="tab-1" class="tab-content active">
 				<div class="main-content">
					 <div class="ligne">
						 <h1 class="titreLigne">Renseigner la ligne de production</h1>
							<select id="select" class="dropdown">
								<option class="disabled-option" value="" disabled selected hidden>Choisir...</option>
								<option value="Ligne B">Ligne B</option>
								<option value="Ligne C">Ligne C</option>
							</select>
					</div>
				</div>
				<div class="enable">
					<aside class="typeAround">
						<section class="file-marker">
							<div>
									<div class="box-title">
											Informationsr
									</div>
									<div class="box-contents">
											<div class="audit-trail">
												<div class="line">
													<ul class="listeInfo">
														<li>Chef de quartier: Julien Bachelet</li>
														<li>Date: 02/06/2018</li>
														<li>Quart: 6h - 18h</li>
														<li>Equipe: Los pepitos de los CanaDios </li>
														<li>Modèle Machine: 4590E / ASY-TNR-CART-470D</li>
													</ul> 
												</div>
											</div>

									</div>
							</div>
						</section>
					</aside>
					<aside class="typeAround">
						<section class="file-marker">
							<div>
									<div class="box-title">
									Saisie quotidienne
									</div>
									<div class="box-contents">
											<div class="audit-trail">
												<div>
													<h2 class="title2"><strong>Efficacité</strong></h2>
													<h3 class="title3">Nombre d'opérateurs :<label for="operateur">2</label></h3>
													<div class="lineInput"><input type="text" placeholder="Saisir un nom..."><input class="input2" type="number" placeholder="Saisir l'efficacité %"></div>
													<div class="lineInput"><input type="text" placeholder="Saisir un nom..."><input class="input2" type="number" placeholder="Saisir l'efficacité %"></div>
													<h3 class="titlePad">Contrôle qualité</h3>
													<div class="lineButton"><button>Consignes	</button><button>Nouveau Contrôle Qualité</button></div>
													 <h2 class="title2 Efficience"><strong>Efficience</strong></h2>
													 <div class="hour">Heures de début
														 	<select class="dropdown blue">
																<option value="6:10">6:10</option>
																<option value="7:00">7:00</option>
																<option value="8:00">8:00</option>
																<option value="hh:mm">hh:mm</option>
															</select>
														</div>
														<div class="hour">Heures de fin
														 	<select class="dropdown blue">
																<option value="7:00">7:00</option>
																<option value="8:00">8:00</option>
																<option value="9:00">9:00</option>
																<option value="hh:mm">hh:mm</option>
															</select>
														</div>
														<aside class="typeAround little">
															<section class="file-marker">
																<div>
																		<div class="box-title">
																				Objectif
																		</div>
																		<div class="box-contents ">
																				<div class="audit-trail test">
																					<h4 class="title4">Quantité par Heure	<label for="qualité" class="test2">75</label></h4> 
																					<h4 class="title4">Cumul Quart	<label for="cumul" class="test2">75</label></h4>
																				</div>
																		</div>
																</div>
															</section>
														</aside>
														<aside class="typeAround little">
															<section class="file-marker">
																<div>
																		<div class="box-title">
																				Réel
																		</div>
																		<div class="box-contents ">
																				<div class="audit-trail test">
																					<input type="text" class="inputQuantity" placeholder="Saisir la quantité par heure..."> 
																					<h4 class="title4 dark">Cumul Quart Réel	<label for="cumul" class="test2">75</label></h4>
																				</div>
																		</div>
																</div>
															</section>
														</aside>
														<button class="buttonC2A">Déclarer un Rebut</button><button class="buttonC2A">Définir le temps perdu</button>
												</div>
											</div>
									</div>
							</div>
						</section>
						<div class="cheat">
						<button class="Send"> Envoyer le Suivi !</button>
						</div>
						</div>
					</aside>
				</div>
			
			<div id="tab-2" class="tab-content">CSS stands for Cascading Style Sheets. CSS describes how HTML elements are to be displayed on screen, paper, or in other media. CSS saves a lot of work. It can control the layout of multiple web pages all at once.</div>

			<div id="tab-3"class="tab-content">jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers.</div>

		</div>
	</div>
 <?php include('inc/footer.html'); ?>