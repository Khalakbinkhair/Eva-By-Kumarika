
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Not Found</title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

       
       

    </head>
    <body>
     
<select id="ddl" >
    <option value=""></option>
    <option value="Colours">Colours</option>
    <option value="Shapes">Shapes</option>
    <option value="Names">Names</option>
  </select>
  
  <select id="ddl2">



  </select>
    </body>





  <script>
  const ddl = document.getElementById('ddl')
    const ddl2 = document.getElementById('ddl2')
    
    const createOption = (ddl, text, value) => {
      const opt = document.createElement('option');
      opt.value = value;
      opt.text = text;
      ddl.options.add(opt);
    }
    
    const configureDropDownLists = (ddl1, ddl2) => {
      const colours = ['Black', 'White', 'Blue'];
      const shapes = ['Square', 'Circle', 'Triangle'];
      const names = ['John', 'David', 'Sarah'];
      ddl2.options.length = 0
    
      switch (ddl1.value) {
        case 'Colours':
          for (const c of colours) {
            createOption(ddl2, c, c);
          }
          break;
        case 'Shapes':
          for (const s of shapes) {
            createOption(ddl2, s, s);
          }
          break;
        case 'Names':
          for (const n of names) {
            createOption(ddl2, n, n);
          }
          break;
        default:
          break;
      }
    }
    
    ddl.addEventListener('change', () => {
      configureDropDownLists(ddl, ddl2)
    })
    </script>
    </html>