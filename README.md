Yii2 TCPDF
==========

Yii2 TCPDF to load TCPDF libraries in a Yii2 site

<h2>CHANGELOG</h2>

<ul>
  <li>0.2 - Load tcpdf_6_0_075</li>
  <li>0.1 - Initial Releases</li>
</ul>

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
$ php composer.phar require cinghie/yii2-tcpdf "dev-master"
```

or add

```
"cinghie/yii2-tcpdf": "dev-master"
```

to the ```require``` section of your `composer.json` file.

## CONFIGURATION

<ul>
	<li>Add in your configuration file, in component section:
		<pre>'component' => [ 
...
		// Yii2 TCPDF
		'tcpdf' => [
			'class' => 'cinghie\tcpdf\TCPDF',
		],
		...
]</pre>
	</li>
</ul>