
The CodeIgniter4 Repository, for some strange reason, does not DECLARE(STRICT_TYPES=1); which I find most peculiar especially since many functions parameter types are set? When parameters are set, variable type errors are detected thus making the PHP just that little bit more robust. 

No doubt when modifying this Repository validation type errors will appear but they will be far easier to fix because rendering fails fast and all error must be fixed before proceeding!

enjoy :)

 Source: CodeIgniter4
    sudo git clone https://github.com/codeigniter4/CodeIgniter4.git 
    Build: 77a32b0 
      
Source: John-Betong/ci4-strict
    sudo git clone https://github.com/John-Betong/ci4-strict.git 
      
Online Demo: **https://ci4-strict.tk**
