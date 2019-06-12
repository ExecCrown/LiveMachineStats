# Live Machine Stats
Makinenizin web sunucusu üzerinde canlı cpu, ram, ağ gibi durumlarını gösteren bir **PHP** scriptidir.

# Ekran Görüntüsü
![LiveMachineStats](https://raw.githubusercontent.com/isaekn/LiveMachineStats/master/LiveMachineStatsSS.png)

# Kurulum
*burada Ubuntu ve Apache2 baz alınmıştır* 

Dağıtımınızın paketlerini güncelleyin
`sudo apt-get update`

Dağıtımınıza bir web sunucusu kurun.
`sudo apt-get install apache2`

Dağıtımınıza php kurun.
`sudo apt-get install php php-cli libapache2-mod-php`

Apache2 servisini yeniden başlatın.
`sudo systemctl restart apache2`

Dağıtımınıza *git* yükleyin.
`sudo apt-get install git`

*LiveMachineStats* scriptini dağıtımınıza indirin.
`cd /var/www/html`
`git clone https://github.com/isaekn/LiveMachineStats.git`

Kurulum işlemini tamamladınız.
Scripte `http://localhost/LiveMachineStats/LiveMachineStats.php` adresinden ulaşabilirsiniz.
