// closes jumbo ad when user clicks link below ad
function jumbo_close(){
  document.getElementById('jumbo_ad').style.display = 'none';
}

//closes jumbo ad after 5 seconds (if user hasn't already closed via link)
function jumbo_close_timed(){
  setTimeout(function(){
      document.getElementById('jumbo_ad').style.display = 'none';
    }, 5000);
  }
