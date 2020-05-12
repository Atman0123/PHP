<!-- INSERT INTO `book` (`bookid`, `title`, `price`, `author`)
 VALUES ('1', 'abc', '4433', 'abc'); -->
<!DOCTYPE html>
<head>
    <title>Insert Form</title>
</head>
<body>
    <form action="insertform.php" method="post">
        <table> 
            <tr>
                <th><h1>Title</h1></th>
                    <td><input type="text" name="title"></td>
                </tr>  
            <tr>
                <th>Price</th>
                    <td><input type="text" name="price"></td>
             </tr>  
            <tr>
                <th>Author</th>
                    <td><input type="text" name="author"></td>
                </tr>  
               <tr>
                <th></th>
                    <td><input type="submit" vlaue="insert"></td>
                    <td><input type="submit" vlaue="insert"></td>
                 </tr>  
        </table>
</form>
</body>
</html>