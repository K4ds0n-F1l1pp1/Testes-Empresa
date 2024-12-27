<php

use Alura\doctrine\Entity\Student;
use Alura\doctrine\Helper\EntityManagerCreator;

require_once __DIR__. "/../vendor/autoload.php";

$entityManager = EntityManagerCreator::createEntityManager();

$student = new Student('Kadson Filippi');

$entityManager::persist($student); // Não envia diretamente para o Banco de dados, apenas obeserva as alterações.
$entityManager::flush();

?>