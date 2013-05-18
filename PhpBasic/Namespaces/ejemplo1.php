// se colisionan nombres
class Conan {
	var $bodyBuild = "extremely muscular";
	var $birthDate = 'before history';
	var $skill = 'fighting';
}

class Conan {
	var $bodyBuild = "very skinny";
	var $birthDate = '1963';
	var $skill = 'comedy';
}

// Dos clases con el mismo nombre pero con namespaces resuelven la colisión

namespace barbarian;
class Conan {
	var $bodyBuild = "extremely muscular";
	var $birthDate = 'before history';
	var $skill = 'fighting';
}
namespace obrien;
class Conan {
	var $bodyBuild = "very skinny";
	var $birthDate = '1963';
	var $skill = 'comedy';
}
$conan = new \barbarian\Conan();
assert('extremely muscular born: before history' == 
   "$conan->bodyBuild born: $conan->birthDate");

$conan = new \obrien\Conan();
assert('very skinny born: 1963' == "$conan->bodyBuild born: $conan->birthDate");

