#HybridIgniter V2

A simple [HybridAuth](http://hybridauth.sourceforge.net/) - [CodeIgniter](http://codeigniter.com/) integration.

##Versions
- HybridAuth 2.4.1
- CodeIgniter 3.0.0

##Installation
1. Drop the provided files into the CodeIgniter project
2. Configure the providers inside the application/third_party/config.php file
3. Modify the controller example supplied (application/controller/hauth.php) to fit your needs

##How to use
The only thing you need is to put as many links as you need pointing to
"http://&lt;yourdomain>/hauth/signin_with_hybridauth?hauth_start=&lt;provider>", ex.:


	<a href="http://www.example.com/hauth/signin_with_hybridauth?hauth_start=Twitter">Log in with Twitter</a><br />
	<a href="http://www.example.com/hauth/signin_with_hybridauth?hauth_start=Facebook">Log in with Facebook</a><br />
	<a href="http://www.example.com/hauth/signin_with_hybridauth?hauth_start=Google">Log in with Google</a><br />
	


