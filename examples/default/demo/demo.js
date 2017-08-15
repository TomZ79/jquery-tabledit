$('#example1').Tabledit({
  url: 'ajax/example.php',
  columns: {
    identifier: [0, 'id'],
    editable: [[1, 'nickname'], [2, 'firstname'], [3, 'lastname']]
  }
});

