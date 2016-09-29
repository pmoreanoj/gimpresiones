$(document).ready(function () {
 
        $('#tableContainer').jtable({
            title: 'Users',
            sorting: true, //Enable sorting
            actions: {
                listAction: document_root+'admin/users/list',
                updateAction: document_root+'admin/users/update',
                deleteAction: document_root+'admin/users/delete',
                createAction: document_root+'admin/users/new'
                /*listAction: '/GettingStarted/PersonList',
                createAction: '/GettingStarted/CreatePerson',
                updateAction: '/GettingStarted/UpdatePerson',
                deleteAction: '/GettingStarted/DeletePerson'*/
            },
            fields: {
                id:{
                    key: true,
                    create: false,
                    edit: false,
                    list: false
                },
                first_name: {
                    title: 'First Name',
                    width: '7%'
                },
                last_name: {
                    title: 'Last Name',
                    width: '7%'
                },
                Phones: {
                    title: 'Reset Password',
                    width: '5%',
                    sorting: false,
                    edit: false,
                    create: false,
                    display: function (data) {
                        
                    }},
                type: {
                    title: 'Type',
                    width: '3%'
                },
                email: {
                    title: 'Email',
                    width: '10%'
                }
            }
        });
        
      $('#tableContainer').jtable('load');  
        
    });