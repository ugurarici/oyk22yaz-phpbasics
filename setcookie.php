<?php

//  PHP aracılığıyla, HTTP yanıtı içinde, istemcinin bir cookie kaydı tutmasını isteyebiliriz

//  bunun için setcookie fonksiyonunu kullanabiliriz

setcookie("falan", "filan");

//  eğer atanan cookienin belli bir zamanda tarayıcıdan otomatik olarak
//  silinmesini istiyorsak, hangi zamana değin tarayıcıda saklanmasını istediğimizi
//  3. bir parametrede, timestamp olarak gönderebiliriz
//  bunun için şimdinin saniye cinsinden zaman damgasını time() fonksiyonu ile alıp
//  üzerine yine saniye cinsinden ekleme yaparak, ne zaman silineceği bilgisini
//  oluşturmuş ve tarayıcıya da bunu bildirmiş oluruz

//  örneğin 10 saniye sonra silinmesini istediğiğimiz bir çerez atayalım
setcookie("bukendini", "10 saniyeye silecek", time() + 10);


//  eğer tarayıcıda bulunan bir çerezin silinmesini istiyorsak
//  silinme zamanını şimdiden daha önceki bir zamana alarak
//  tarayıcının bu çerezin ömrünün dolduğunu anlamasını ve silmesini sağlayabiliriz
setcookie("zaten", "hiç varolmadın ki :(", time() - 1);

echo "cookie atandı. git kontrol et.";

?>

<a href="cookie.php">GİT İŞTE</a>