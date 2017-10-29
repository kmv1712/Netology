<?php 
class CertificateGd 
{ 
	public function generate($name, $point) 
	{ 

		$name = htmlspecialchars(trim($name));
    
		$image = imagecreatetruecolor(320, 230);
		$backColor = imagecolorallocate($image, 255, 224, 221);
		$textColor = imagecolorallocate($image, 129, 15, 98);
		$fontFile = __DIR__ . '/Roboto-Medium.ttf';
		$imBox = imagecreatefrompng(__DIR__ . '/Certificate.png');
		imagefill($image, 0, 0, $backColor);
		imagecopy($image, $imBox, 5, 5, 0, 0, 320, 230);
		imagettftext($image, 25, 0, 90, 80, $textColor, $fontFile, $name);
		imagettftext($image, 10, 0, 90, 150, $textColor, $fontFile, "Вы заработали оценку: $point" );
		// imagettftext(image, size, angle, x, y, color, fontfile, text)
		imagepng($image);
    imagedestroy($image);
		}
}

