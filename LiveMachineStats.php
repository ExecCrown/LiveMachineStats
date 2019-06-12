<?php
/*

==================================

 		Codded  by  İsa Eken
 		Copyright 12.06.2019

==================================

		   VERSION 1.0.0
!!!only linux distros supported!!!

==================================

GitHub-> https://github.com/isaekn

==================================
*/

// Set script language
// Languages => "tr_TR", "en_US", "ru_RU", "fr_FR"
$Language = "tr_TR";

// Active "USERNAME & PASSWORD" login.
$SecureMode = true;

// USERNAME and PASSWORD
$Authentication = [ "USERNAME" => "admin", "PASSWORD" => "pa55wd" ];

// Language
switch ($Language)
{
	case 'tr_TR':
		$Lang = 
		[
			"TITLE" 			=> "Canlı Makine Bilgileri",
			"UPDATED" 			=> "Güncellendi.",
			"NOW" 				=> "Şimdi",
			"REFRESH" 			=> "Yenile",
			"LOADING" 			=> "Yükleniyor...",
			"CPUUSAGE" 			=> "CPU Kullanımı",
			"CORES" 			=> "Çekirdekler",
			"VALUE" 			=> "Değer",
			"NETWORK" 			=> "Ağ",
			"LOGIN" 			=> "Giriş Yap",
			"LOGOUT" 			=> "Çıkış Yap",
			"USERNAME" 			=> "Kullanıcı Adı",
			"PASSWORD" 			=> "Şifre",
			"WRONG_USERNAME" 	=> "Hatalı kullanıcı adı!",
			"WRONG_PASSWORD" 	=> "Hatalı şifre!",
			"NOT_SUPPORTED_OS" 	=> "İşletim sisteminiz desteklenmiyor!",
			"SUPPORTED_OS" 		=> "Şimdilik sadece linux tabanlı işletim sistemleri destekleniyor."
		];
		break;
	
	case "en_US":	
		$Lang = 
		[
			"TITLE" 			=> "Live Machine Stats",
			"UPDATED" 			=> "Data updated.",
			"NOW" 				=> "Now",
			"REFRESH"			=> "Refresh",
			"LOADING" 			=> "Loading...",
			"CPUUSAGE" 			=> "CPU Usage",
			"CORES" 			=> "Core(s)",
			"VALUE" 			=> "Value",
			"NETWORK" 			=> "Network",
			"LOGIN" 			=> "Log In",
			"LOGOUT" 			=> "Log Out",
			"USERNAME" 			=> "User Name",
			"PASSWORD" 			=> "Password",
			"WRONG_USERNAME" 	=> "Wrong username!",
			"WRONG_PASSWORD" 	=> "Wrong password!",
			"NOT_SUPPORTED_OS" 	=> "Your operating system is not supporting!",
			"SUPPORTED_OS" 		=> "Only supporting linux distros for now."
		];
		break;
	
	case "ru_RU":	
		$Lang = 
		[
			"TITLE" 			=> "Статистика живого компьютера",
			"UPDATED" 			=> "Данные обновлены.",
			"NOW" 				=> "Сейчас",
			"REFRESH"			=> "обновление",
			"LOADING" 			=> "погрузка...",
			"CPUUSAGE" 			=> "Использование процессора",
			"CORES" 			=> "Ядро (ы)",
			"VALUE" 			=> "Значение",
			"NETWORK" 			=> "сеть",
			"LOGIN" 			=> "Авторизоваться",
			"LOGOUT" 			=> "Выйти",
			"USERNAME" 			=> "Имя пользователя",
			"PASSWORD" 			=> "пароль",
			"WRONG_USERNAME" 	=> "Неправильное имя пользователя!",
			"WRONG_PASSWORD" 	=> "Неправильный пароль!",
			"NOT_SUPPORTED_OS" 	=> "Ваша операционная система не поддерживает!",
			"SUPPORTED_OS" 		=> "На данный момент поддерживаются только дистрибутивы Linux."
		];
		break;
	
	case "fr_FR":	
		$Lang = 
		[
			"TITLE" 			=> "Statistiques Live Machine",
			"UPDATED" 			=> "Données mises à jour.",
			"NOW" 				=> "À présent",
			"REFRESH"			=> "Rafraîchir",
			"LOADING" 			=> "Chargement...",
			"CPUUSAGE" 			=> "L'utilisation du processeur",
			"CORES" 			=> "Les noyaux",
			"VALUE" 			=> "Valeur",
			"NETWORK" 			=> "Réseau",
			"LOGIN" 			=> "S'identifier",
			"LOGOUT" 			=> "Connectez - Out",
			"USERNAME" 			=> "Nom d'utilisateur",
			"PASSWORD" 			=> "Mot de passe",
			"WRONG_USERNAME" 	=> "Mauvais nom d'utilisateur!",
			"WRONG_PASSWORD" 	=> "Mauvais mot de passe!",
			"NOT_SUPPORTED_OS" 	=> "Votre système d'exploitation ne supporte pas!",
			"SUPPORTED_OS" 		=> "Soutenir uniquement les distributions Linux pour l'instant."
		];
		break;
	
	default: print "Select script language first."; exit; break;
}

// Check operating system is supported
if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN')
{
	// Set charset to UTF-8
	header('Charset=UTF-8');
	
	// Set document type to html.
	header('Content-Type: text/html');
	print "<!DOCTYPE html>";
	print "<html>";

		// Head contents
		print "<head>";
			// Set charset UTF-8
			print '<meta charset="UTF-8">';

			// Responsive document
			print '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';

			// Stylesheet sources
			print '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
			print '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">';

			// JavaScript sources
			print '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
			print '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>';

			// Document title
			print '<title>'.$Lang["NOT_SUPPORTED_OS"].'</title>';
		print "</head>";

		// Body contents
		print "<body class=\"bg-dark text-light\">";
			print "<div class=\"container\">";
				print "<div class=\"row justify-content-center align-items-center\" style=\"height: 100vh!important\">";
					print "<div class=\"col-12 col-sm-10 col-md-8 col-lg-6\">";
						print "<h2 class=\"text-center\">{$Lang["NOT_SUPPORTED_OS"]}</h2>";
						print "<h6 class=\"text-center\">{$Lang["SUPPORTED_OS"]}</h6>";
					print "</div>";
				print "</div>";
			print "</div>";
		print "</body>";
	print "<html>";
	exit;
}

// Check login mode enabled
if ($SecureMode == true)
{
	// Is loginned variable
	$Login = false;

	// Error variable
	$AuthenticationError = [];

	// Start session
	session_start();

	// Logout
	if (isset($_GET["LOGOUT"]))
	{
		// Delete current session
		session_destroy();

		// Redirect page
		header("Location: ?");
	}
	
	// Check "USERNAME" and "PASSWORD" session exists
	if (isset($_SESSION["USERNAME"]) && isset($_SESSION["PASSWORD"]))
		// Check is valid username
		if ($_SESSION["USERNAME"] == $Authentication["USERNAME"])
			// Check is valid password
			if ($_SESSION["PASSWORD"] == $Authentication["PASSWORD"])
				// Loginned
				$Login = true;
			// Wrong password error
			else array_push($AuthenticationError, [ "ERROR" => "WRONG_PASSWORD" ]);
		// Wrong username error
		else array_push($AuthenticationError, [ "ERROR" => "WRONG_USERNAME" ]);

	// Check is not loginned
	if ($Login == false)
	{
		// Check form submit
		if (isset($_GET["SUBMIT"]))
			// Check form controls is empty
			if (isset($_POST["USERNAME"]) && isset($_POST["PASSWORD"]))
				// Check username
				if ($_POST["USERNAME"] == $Authentication["USERNAME"])
					// Check password
					if ($_POST["PASSWORD"] == $Authentication["PASSWORD"])
					{
						// Login
						$_SESSION["USERNAME"] = $Authentication["USERNAME"];
						$_SESSION["PASSWORD"] = $Authentication["PASSWORD"];

						// Refresh page
						header("Refresh: 0");
					}
					// Wrong password error
					else array_push($AuthenticationError, [ "ERROR" => "WRONG_PASSWORD" ]);
				// Wrong username error
				else array_push($AuthenticationError, [ "ERROR" => "WRONG_USERNAME" ]);

		// Print login page
			// Set charset to UTF-8
			header('Charset=UTF-8');
			
			// Set document type to html.
			header('Content-Type: text/html');
			print "<!DOCTYPE html>";
			print "<html>";

				// Head contents
				print "<head>";
					// Set charset UTF-8
					print '<meta charset="UTF-8">';

					// Responsive document
					print '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';

					// Stylesheet sources
					print '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
					print '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">';

					// JavaScript sources
					print '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
					print '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>';

					// Document title
					print '<title>'.$Lang["LOGIN"].'</title>';
				print "</head>";

				// Body contents
				print "<body class=\"bg-dark text-light\">";
					print "<div class=\"container\">";
						print "<div class=\"row justify-content-center align-items-center\" style=\"height: 100vh!important\">";
							print "<form class=\"col-12 col-sm-10 col-md-8 col-lg-6\" action=\"?SUBMIT\" method=\"POST\">";
								print "<h2 class=\"text-center\">{$Lang["LOGIN"]}</h2>";

								if (isset($AuthenticationError[0]["ERROR"]))
								{
									print "<h5 class=\"text-center text-danger\">";
										print $Lang[$AuthenticationError[0]["ERROR"]];
									print "</h5>";
								}

								print "<div class=\"form-group\">";
									print "<label for=\"USERNAME\">{$Lang["USERNAME"]}</label>";
									print "<input name=\"USERNAME\" placeholder=\"{$Lang["USERNAME"]}\" id=\"USERNAME\" type=\"text\" class=\"form-control\" />";
								print "</div>";
								print "<div class=\"form-group\">";
									print "<label for=\"PASSWORD\">{$Lang["PASSWORD"]}</label>";
									print "<input name=\"PASSWORD\" placeholder=\"{$Lang["PASSWORD"]}\" id=\"PASSWORD\" type=\"password\" class=\"form-control\" />";
								print "</div>";
								print "<button type=\"submit\" class=\"btn btn-primary float-right\">{$Lang["LOGIN"]}</button>";
							print "</form>";
						print "</div>";
					print "</div>";
				print "</body>";
			print "<html>";

		exit;
	}
}

// Set charset to UTF-8
header('Charset=UTF-8');

if (isset($_GET["ajax"]))
{
	switch ($_GET["ajax"])
	{
		// MEMINFO
		case "meminfo":
			// Set document type to text/txt
			header('Content-Type: text/txt');

			// print file content "/proc/meminfo" !!! ONLY LINUX DISTROS !!!
			print file_get_contents("/proc/meminfo");
			break;

		// CPU USAGE
		case "cpu_usage":
			// Set document type to application/json
			header('Content-Type: application/json');

			// convert json and print cpu usage.
			print json_encode(sys_getloadavg());
			break;
		
		// NETWORK INTERFACES
		case "network_interfaces":
			// Set document type to application/json
			header('Content-Type: application/json');

			// Network interfaces
			$Interfaces = array();

			// Get interface directories
			foreach (glob("/sys/class/net/*") as $Interface)
			{
				// Get directory name and add to array
				array_push($Interfaces, basename($Interface));
			}

			// convert json and print network interface.
			print json_encode($Interfaces);
			break;
		
		// INTERFACE DATA
		case "interface_data":
			// Set document type to application/json
			header('Content-Type: application/json');
			if (isset($_GET["interface"]))
			{
				$NetworkInterface = $_GET["interface"];
				// Check interface directory is exists
				if (is_dir(realpath("/sys/class/net/".$NetworkInterface)))
				{
					$InterfaceDirectory = "/sys/class/net/".$NetworkInterface;
					$Info = array();

					// Get interface info files
					foreach (glob($InterfaceDirectory."/statistics/*") as $Statistic)
					{
						// Get info and add to array
						array_push($Info, array(basename($Statistic), file_get_contents($Statistic)));
					}

					// convert json and print network interface data.
					print json_encode($Info);
				}
			}
			break;
	}

	// Finish ajax data printing stop executing.
	exit;
}

if (isset($_GET["d"]))
{
	switch ($_GET["d"])
	{
		case 'js':
			// Set document type to application/javascript
			header('Content-Type: application/javascript');

			// JavaScript Function => Load_MEMINFO
			print 'function Load_MEMINFO() { $.get("?ajax=meminfo", (data) => { $("#meminfo").html(data); }); }';

			// JavaScript Function => Load_CPUUsage
			print 'function Load_CPUUSAGE()';
			print '{';
				print '$.get("?ajax=cpu_usage", (CPU_Usage) => {';
					print 'var CPUCores = 0;';
					print 'var Container = $("#CPU_Usage");';
					print 'Container.empty();';
					print 'CPU_Usage.forEach(Percentage => {';
						print 'var HTML_TR = $("<tr></tr>");';
						print 'var HTML_TD0 = $("<td scope=\"row\">CPU #" + CPUCores + "</td>");';
						print 'var HTML_TD1 = $("<td></td>");';
						print 'var HTML_DIV_PROGRESS = $("<div class=\"progress\"></div>");';
						print 'var HTML_DIV_PERCENTAGE = $("<div class=\"progress-bar text-dark bg-info\" role=\"progressbar\" style=\"width: " + Percentage + "%;\">" + Percentage + "</div>");';
						
						print 'HTML_DIV_PROGRESS.append(HTML_DIV_PERCENTAGE);';
						print 'HTML_TD1.append(HTML_DIV_PROGRESS);';
						print 'HTML_TR.append(HTML_TD0);';
						print 'HTML_TR.append(HTML_TD1);';
						print 'Container.append(HTML_TR);';

						print 'CPUCores += 1;';
					print '})';
				print '})';
			print '}';
			
			// JavaScript Function => Load_Interface
			print 'function Load_Interface(Interface, Container)';
			print '{';
				print '$.get("?ajax=interface_data&interface=" + Interface, (DATA) => {';
					print 'Container.empty();';
					print 'DATA.forEach(Data => {';
						print 'var HTML_TR = $("<tr></tr>");';
						print 'var HTML_TD0 = $("<td>" + Data[0] + "</td>");';
						print 'var HTML_TD1 = $("<td>" + Data[1] + "</td>");';

						print 'HTML_TR.append(HTML_TD0);';
						print 'HTML_TR.append(HTML_TD1);';
						print 'Container.append(HTML_TR);';
					print '})';
				print '})';
			print '}';
			break;
	}
	exit;
}

// Set document type as html
header('Content-Type: text/html');
print '<!DOCTYPE html>';
print '<html>';

	// Head content
	print '<head>';
		// Set charset UTF-8
		print '<meta charset="UTF-8">';

		// Responsive document
		print '<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">';

		// Stylesheet sources
		print '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">';
		print '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css">';

		// JavaScript sources
		print '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
		print '<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>';
		print '<script src="?d=js"></script>';

		// Document title
		print '<title>'.$Lang["TITLE"].'</title>';

		// JavaScript
		print '<script>';
			print 'function LoadData(AutoExecuted = false)';
			print '{';
				print 'Load_MEMINFO();';
				print 'Load_CPUUSAGE();';
				foreach (glob("/sys/class/net/*") as $Interface) print "Load_Interface(\"".basename($Interface)."\", $(\"#Interface_".basename($Interface)."_Data\"));";
				print 'if (AutoExecuted == false) $(".toast").toast("show");';
			print '}';
			
			print '$(document).ready(() => {';
				print 'LoadData(true);';
				print 'setInterval(() => { LoadData(true); }, 2000);';
			print '});';
		print '</script>';
	print '</head>';

	// Body content
	print '<body class="bg-dark text-light" style="padding: 25px">';

		// Refreshed toast
		print '<div class="toast" style="position: fixed; top: 15px; right: 15px;">';
			print '<div class="toast-header">';
				print '<strong class="mr-auto">'.$Lang["UPDATED"].'&nbsp;<small>'.$Lang["NOW"].'</small></strong>';
				print '<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>';
			print '</div>';
		print '</div>';

		// Title and hostname
		print '<h1 class="text-center">'.$Lang["TITLE"].'</h1>';
		print '<h5 class="text-center">'.gethostname().'</h5>';

		// Page container
		print '<div class="container">';
			print '<br>';

			// Refresh button
			print '<div class="row">';
				print '<div class="col">';
					if ($SecureMode)  print '<a class="btn btn-primary btn-sm float-right btn-dark" href="?LOGOUT">'.$Lang["LOGOUT"].' <i class="fas fa-sign-out-alt"></i></a>';
					print '<a class="btn btn-primary btn-sm float-right btn-dark" onclick="LoadData(false)">'.$Lang["REFRESH"].' <i class="fas fa-sync"></i></a>';
				print '</div>';
			print '</div>';

			// Content
			print '<div class="row">';
				// Meminfo
				print '<div class="col-12 col-md-3">';
					print '<pre class="text-light" id="meminfo">'.$Lang["LOADING"].'</pre>';
				print '</div>';

				$ThermalZone = "/sys/class/thermal/";
				if (is_dir($ThermalZone."thermal_zone0")) $ThermalZone .= "thermal_zone0";
				else if (is_dir($ThermalZone."thermal_zone1")) $ThermalZone .= "thermal_zone1";

				print '<div class="col-12 col-md-9">';
					// CPU Usage
					print '<h5>'.$Lang["CPUUSAGE"].'</h5>';
					print '<div>';
						print '<table class="table table-dark table-striped table-bordered table-hover">';
							// CPU Usage Table Header
							print '<thead>';
								print '<tr>';
									print '<th scope="col" style="width: 180px">'.$Lang["CORES"].'</th>';
									print '<th scope="col">'.$Lang["VALUE"].'</th>';
								print '</tr>';
							print '</thead>';
							// CPU USage Table Content
							print '<tbody id="CPU_Usage">';
								print '<tr>';
									print '<td colspan="2" class="text-center">'.$Lang["LOADING"].'</td>';
								print '</tr>';
							print '</tbody>';
						print '</table>';
					print '</div>';

					print '<br>';
					
					// Thermal Zone
					print '<h5>Termal Bölge ('.basename($ThermalZone).')</h5>';
					print '<div>';
						print '<table class="table table-dark table-striped table-bordered table-hover">';
							print '<tbody>';
								$ThermalZoneDataList =
								[
									"type",
									"temp",
									"mode",
									"policy",
									"available_policies"
								];
								foreach ($ThermalZoneDataList as $Data)
								{
									print '<tr>';
										print '<td class="text-center">'.$Data.'</td>';
										print '<td class="text-center">'.file_get_contents($ThermalZone."/".$Data).'</td>';
									print '</tr>';
								}
							print '</tbody>';
						print '</table>';
					print '</div>';

					print '<br>';

					// Network
					print '<h5>'.$Lang["NETWORK"].'</h5>';
					print '<div>';
						// Network Interface Navigation
						print '<nav id="NetworkInterfaces">';
							print '<div class="nav nav-pills" id="nav-tab" role="tablist">';
								$InterfaceID = 0;
								// Get interfaces
								foreach (glob("/sys/class/net/*") as $Interface)
								{
									// Get interface name
									$Interface = basename($Interface);
									
									// Print interface
									if ($InterfaceID == 0) print "<a onclick=\"Load_Interface('{$Interface}', $('#Interface_{$Interface}_Data'))\" class=\"nav-item nav-link dark active\" id=\"nav-{$Interface}-tab\" href=\"#nav-{$Interface}\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"nav-{$Interface}\" aria-selected=\"true\">{$Interface}</a>";
									else print "<a onclick=\"Load_Interface('{$Interface}', $('#Interface_{$Interface}_Data'))\" class=\"nav-item nav-link dark\" id=\"nav-{$Interface}-tab\" href=\"#nav-{$Interface}\" role=\"tab\" data-toggle=\"tab\" aria-controls=\"nav-{$Interface}\" aria-selected=\"false\">{$Interface}</a>";

									$InterfaceID += 1;
								}
							print '</div>';
						print '</nav>';
						// Network interface(s) content
						print '<div class="tab-content" id="nav-tabContent">';
							$InterfaceID = 0;
							// Get interfaces
							foreach (glob("/sys/class/net/*") as $Interface)
							{
								// Get interface name
								$Interface = basename($Interface);
								
								// Print interface
								if ($InterfaceID == 0) print "<div class=\"tab-pane fade show active\" id=\"nav-{$Interface}\" role=\"tabpanel\" aria-labelledby=\"nav-{$Interface}-tab\">";
								else print "<div class=\"tab-pane fade\" id=\"nav-{$Interface}\" role=\"tabpanel\" aria-labelledby=\"nav-{$Interface}-tab\">";
								
									print "<table class=\"table table-dark table-striped table-bordered table-hover\">";
										print "<tbody id=\"Interface_{$Interface}_Data\">";
											print "<tr>";
												print "<td class=\"text-center text-light\" colspan=\"2\">{$Lang["LOADING"]}</td>";
											print "</tr>";
										print "</tbody>";
									print "</table>";
								print "</div>";

								$InterfaceID += 1;
							}
						print '</div>';
					print '</div>';
				print '</div>';
			print'</div>';

			// Footer /* codded by İsa Eken */
			print '<div class="text-center text-info">Codded by İsa Eken</div>';

			print '<br>';
		print '</div>';
	print '</body>';
print '</html>';
exit;
