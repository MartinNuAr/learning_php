<?php
class Person {
    var $first_name;
    var $last_name;

    function __construct( $fn, $ln ) {
        $this->first_name = $fn;
        $this->last_name = $ln;
    }

    public function get_first_name() {
        return $this->first_name;
    }

    public function get_last_name() {
        return $this->last_name;
    }
}

// Challenge: Sort this array of Person objects by last, then first name! 

$rob = new Person( 'Rob', 'Casabona' );
$joe = new Person( 'Joe', 'Casabona' );
$erin = new Person( 'Erin', 'Casabona' );
$steve = new Person( 'Steve', 'Wozniack' );
$bill = new Person( 'Bill', 'Gates' );
$walt = new Person( 'Walt', 'Disney' );
$bob = new Person( 'Bob', 'Iger' );

$people = array( $rob, $joe, $erin, $steve, $bill, $walt, $bob );

// Sorts by first name first to put them in an upper position
usort( $people, function($a, $b){
    return $a->get_first_name() <=> $b->get_first_name();
});

// then sorts by last name to put them into the final order
usort( $people, function($a, $b){
    return $a->get_last_name() <=> $b->get_last_name();
});
?>

<?php
    echo '<ol>';
    foreach($people as $person){
        echo '<li>' . $person->get_last_name() . ' ' . $person->get_first_name() . '</li>';
    }
    echo '</ol>';
?>