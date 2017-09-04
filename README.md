# jQuery-Tabledit v1.2.7
Inline editor for HTML tables compatible with Bootstrap. Tabledit use Ajax for saving new row and for Edit and Delete row.

Plugin works with other Plugins:
- DataTable Plugin

#### You can insert different types of tags

More in Example 7 on 
https://bluesatkv.github.io/jquery-tabledit/#examples7

![img02](https://user-images.githubusercontent.com/20857152/29292559-cbcca5ec-8147-11e7-863a-758510e0effa.png)

#### You can add new row to table

More in Example 9 on 
https://bluesatkv.github.io/jquery-tabledit/#examples9-10


![img01](https://user-images.githubusercontent.com/20857152/29292558-cbca754c-8147-11e7-82c8-1704cc7d9a7b.png)

## Basic usage

1. Add the jQuery tabledit plugin after jQuery library.

```
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="jquery.tabledit.js"></script>
```


2. Create Bootstrap table with data

```
<table class="table table-hover" id="my-table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
            <th>Column 4</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
            <td>Data 4</td>
        </tr>
    </tbody>
</table>
```

3. Call the plugin on your existing table and specify the editable columns whatever you like.

```
$('#my-table').Tabledit({

    columns: {
      identifier: [0, 'id'],                    
      editable: [[1, 'col1'], [2, 'col1'], [3, 'col3'], [4, 'col4']]
    }

});
```


## Examples

**Readonly value in TD**

You set this in the editable array, if you want readonly leave the column out of the 'editable' array e.g.: Column 3 wouldn't be editable.

```
$('#my-table').Tabledit({

    columns: {
      identifier: [0, 'id'],                    
      editable: [[1, 'col1'], [2, 'col1'], [4, 'col4']]
    }

});
```

## Documentation

Full complete documentation by BluesatKV on 
https://bluesatkv.github.io/jquery-tabledit/#documentation


## Changelog
See CHANGELOG on 
https://github.com/BluesatKV/jquery-tabledit/blob/master/CHANGELOG.md

