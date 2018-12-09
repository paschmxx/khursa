<?php

function prepareData($pdo, $dataToDb){
    createTable($pdo);
    setData($pdo, $dataToDb);
}
function createTable($pdo){
    $pdo->query('CREATE TABLE IF NOT EXISTS `roku`.`articles` 
      ( `title` VARCHAR(255) NOT NULL , `description` TEXT NOT NULL , `button-text` VARCHAR(255) NOT NULL , `image` VARCHAR(255) NOT NULL,
       `button-link` VARCHAR(255) NOT NULL, `category-id` INT(2) NOT NULL,
       `date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ) ENGINE = InnoDB;'
    );
}

function setData($pdo, $data){
    $articles = $pdo->query('SELECT * from articles')->fetchAll(\PDO::FETCH_ASSOC);

    if(count($articles) >=7){
        // data exists
        return;
    }

    foreach ($data as $post){
        $queryString = 'INSERT INTO `articles` (`title`, `description`, `button-text` , `button-link`, `category-id`,`date`) VALUES 
            ('
                ."'".$post['title']."',"
                ."'".$post['description']."',"
                ."'".$post['button-text']."',"
                ."'".$post['button-link']."',"
                ."'".$post['category-id']."',"
                . 'CURRENT_TIMESTAMP'
            .')';
        $pdo->query($queryString);
    }
}



