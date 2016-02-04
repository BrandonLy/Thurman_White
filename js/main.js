jQuery(document).ready(function( $ ) {

    // function to change the info on the home page
    var $changingHeader = $('#pt1 h1');
    var $changingDiv = $('#pt1 div');

    var $whoHeader = $('#who-header');
    var $whoContent = $('#who-content');

    var $deansHeader = $('#deans-header');
    var $deansContent = $('#deans-content');

    $('#who').click(function() {
        $changingHeader.text($whoHeader.text());
        $changingDiv.html($whoContent.html())
    });

    $('#dean').click(function() {
        $changingHeader.text($deansHeader.text());
        $changingDiv.html($deansContent.html())
    });

    // initialize a counter
    var i = 0;
    // create an empty array to hold all the teacher's names
    var $teachers = [];
    // while loop that runs once for every teacher
    while ($('.faculty-member').length > i) {
        // stores the name in a temporary variable
        var name = $($('.faculty-member').get(i)).children('.circle').children('.teacher-name').text().split(" ")[1];
        // pushes the name to the teacher array
        $teachers.push(name);
        // increment the counter
        i++;
    }

    // temporary arrays to hold the sorted teachers
    var $a = [];
    var $davis = [];
    var $hemme = [];
    var $pelusio = [];

    // for loop that runs once for every teacher in the array
    for (var x = 0; x < $teachers.length; x++) {
        // if the teacher at index x comes before Davis add to the array $a
        if ($teachers[x] < 'Davis') {
            $a.push($teachers[x]);
        // if the teacher at index x comes before Hemme add to the array $davis
        } else if ($teachers[x] < 'Hemme') {
            $davis.push($teachers[x]);
        // if the teacher at index x comes before Pelusio add to the array $hemme
        } else if ($teachers[x] < 'Pelusio') {
            $hemme.push($teachers[x]);
        // if it doesn't come before any of those, add to the array $pelusio
        } else {
            $pelusio.push($teachers[x]);
        }
    }

    // when the a button is clicked
    $('#a').click(function() {
        // hide all the faculty members
        $('.faculty-member').hide();
        // for loop that runs once for every teacher on the page
        for (y = 0; y < $teachers.length; y++) {
            // for loop that runs once for every teacher in the $a array
            for (z = 0; z < $a.length; z++) {
                // if the teacher at index y has the same last name as the teacher at index z show the teacher
                if ($($('.faculty-member').get(y)).children('.circle').children('.teacher-name').text().split(" ")[1] == $a[z]) {
                    $($('.faculty-member').get(y)).show();
                }
            }
        }
    });

    // when the davis button is clicked
    $('#davis').click(function() {
        // hide all the faculty members
        $('.faculty-member').hide();
        // for loop that runs once for every teacher on the page
        for (d = 0; d < $teachers.length; d++) {
            // for loop that runs once for every teacher in the $davis array
            for (f = 0; f < $davis.length; f++) {
                // if the teacher at index d has the same last name as the teacher at index f show the teacher
                if ($($('.faculty-member').get(d)).children('.circle').children('.teacher-name').text().split(" ")[1] == $davis[f]) {
                    $($('.faculty-member').get(d)).show();
                }
            }
        }
    });

    // when the hemme button is clicked
    $('#hemme').click(function() {
        // hide all the faculty members
        $('.faculty-member').hide();
        // for loop that runs once for every teacher on the page
        for (p = 0; p < $teachers.length; p++) {
            // for loop that runs once for every teacher in the $hemme array
            for (k = 0; k < $hemme.length; k++) {
                // if the teacher at index p has the same last name as the teacher at index f show the teacher
                if ($($('.faculty-member').get(p)).children('.circle').children('.teacher-name').text().split(" ")[1] == $hemme[k]) {
                    $($('.faculty-member').get(p)).show();
                }
            }
        }
    });

    // when the pelusio button is clicked
    $('#pelusio').click(function() {
        // hide all the faculty members
        $('.faculty-member').hide();
        // for loop that runs once for every teacher on the page
        for (r = 0; r < $teachers.length; r++) {
            // for loop that runs once for every teacher in the $pelusio array
            for (w = 0; w < $pelusio.length; w++) {
                // if the teacher at index r has the same last name as the teacher at index k show the teacher
                if ($($('.faculty-member').get(r)).children('.circle').children('.teacher-name').text().split(" ")[1] == $pelusio[w]) {
                    $($('.faculty-member').get(r)).show();
                }
            }
        }
    });

});