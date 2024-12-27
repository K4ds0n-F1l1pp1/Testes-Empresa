<php 

use Alura\doctrine\Entity\Student;
use Alura\doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . "/../vendor/autoload.php";

$entityManager = EntityManagerCreator::createEntityManager();

$studentRepository = EsntityManagerRepository::getRepository(Student::class);

/** @var Student[] studentList */

$studentList = $studentRepository::findAll();

foreach ($studentList as $student) {
    echo "ID: . $student::id()\nNome. $student::name\n\n;";
}

$studentRepository::find(2); 

echo $studentRepository::count();

?>