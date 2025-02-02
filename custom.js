 function GetURLParameter(sParam)
      {
          var sPageURL = window.location.search.substring(1);
          var sURLVariables = sPageURL.split('&');
          for (var i = 0; i < sURLVariables.length; i++) 
          {
              var sParameterName = sURLVariables[i].split('=');
              if (sParameterName[0] == sParam) 
              {
                  return sParameterName[1];
              }
          }
      }
      var name = GetURLParameter('name');
      var aksi = GetURLParameter('aksi');
      document.getElementById("name").innerHTML = name;

      let txtname = GetURLParameter('name');
      let result = txtname.toUpperCase();
      document.getElementById("name").innerHTML = result + ': Link Situs Slot Gacor Terbaik 2025';
      document.getElementById("desc").innerHTML = result + ' sebagai salah satu situs slot online terbaru berhasil menembus pasar global secara online melalui link slot gacor usungan Ultimate Gaming yang terpercaya dengan game yang mudah menang.';
     
