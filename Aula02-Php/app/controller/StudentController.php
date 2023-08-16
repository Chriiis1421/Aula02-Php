<?php
    namespace app\controller;
    use app\database\models\Student;

    class StudentController {

        private $student;
        
        public function __construct() {
            $this->student = new Student();
        }

        public function read() {
            return json__encode($this->student->all());
        }

        public function create($data) {
            try {
                $response = $this->student->create(
                    array(
                        'nome' => $data['nome'],
                        'turma' => $data['turma']
                    )
                    );
            } catch(Exception $e) {

            }
        }

    }