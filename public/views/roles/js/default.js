$(document).ready(function(){    
    // $("#searchRole").on("keyup", function() {
    //     var value = $(this).val().toLowerCase();
    //     $("#roleTable tr").filter(function() {
    //         $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    //     });
    // });
  
});
const dataSource = {
    api: {
      readData: { url: '/role/getrolelist', method: 'GET' }
     //   readData: { url: () => `/role/getrolelist`, method: 'GET' },
    }
  };
const grid = new tui.Grid({
    el: document.getElementById('roleGrid'),
    scrollX: false,
    scrollY: false,
    rowHeight: 35,
    rowHeaders: ['rowNum'],            
    header: {
      height: 40
    },  
    columns: [
        {
            header: 'ID',
            name: 'id'
        },
        {
            header: 'Title',            
            name: 'title'
        },
        {
            header: 'Description',
            name: 'description'
        },
        {
            header: 'Active',
            name: 'active'
        },
        {
            header: 'CreatedAt',
            name: 'createdAt'
        }
    ],
    data:dataSource,
    pageOptions: {
        useClient: true,
        perPage: 1
    }
}); 
    tui.Grid.applyTheme('striped');
    //const pagination = grid.getPagination();