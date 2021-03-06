<?xml version = "1.0" encoding = "UTF-8"?> 
<xsl:stylesheet version = "1.0" xmlns:xsl = "http://www.w3.org/1999/XSL/Transform"> 
<xsl:template match = "/"> 
<html> <body><h1> <center> CAKE.COM </center></h1> <h2><center>Product Details</center></h2> 
<table border = "1" align="center"> 
<tr bgcolor = "pink"> <th>Product ID</th> <th>Product Name</th> <th>Product Price (Rs)</th> <th>Discount Percentage (%)</th><th>Final Price</th></tr>
<xsl:for-each select = "class/product"> 
<xsl:sort select = "@prodID"/> 
<tr> 
<td><xsl:value-of select = "@prodID"/></td> 
<td><xsl:value-of select = "prodName"/></td> 
<td><xsl:value-of select = "prodPrice"/></td> 
<td><xsl:value-of select = "discPerc"/></td> 
<td><xsl:value-of select = "finalPrice"/></td> 
</tr> 
</xsl:for-each> 
</table> </body> </html> 
</xsl:template> 
</xsl:stylesheet>