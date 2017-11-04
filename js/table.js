function tableCreate() {
    var body = document.getElementById("products_table");
    var tbl = document.createElement('table');
    tbl.setAttribute('border', '1');
    var tbdy = document.createElement('tbody');
    var id = 1;
    for (var i = 0; i < 4; i++) {
        var tr = document.createElement('tr');
        for (var j = 0; j < 2; j++) {				            
                var td = document.createElement('td');
                var a_img = document.createElement('a');
            	var img = document.createElement('img');
            	var h3 = document.createElement('h3');
            	var a_title = document.createElement('a');
            	var p_desc = document.createElement('p');
            	var p_price = document.createElement('p');
            	a_title.setAttribute("class", "productlink product_title");
            	a_title.setAttribute("id", "title" + id);
            	p_desc.setAttribute("class", "product_desc");
            	p_desc.setAttribute("id", "p_desc" + id);
            	p_price.setAttribute("class", "product_orderinfo product_price");
            	p_price.setAttribute("id", "p_price" + id);
            	a_img.setAttribute("id", "picture" + id);
            	a_img.setAttribute("class", "product_pict");
            	img.setAttribute("class", "product_thumb");
            	img.setAttribute("id", "img" + id);	
            	h3.appendChild(a_title);	
            	a_img.appendChild(img);	                	
				td.appendChild(a_img);
				td.appendChild(h3);	
				td.appendChild(p_desc);
				td.appendChild(p_price);	                		                 
                tr.appendChild(td);	
                id++;			            
        }
        tbdy.appendChild(tr);
    }
    tbl.appendChild(tbdy);
    body.appendChild(tbl);
    document.getElementById("img1").setAttribute("src", "img/beans1.png");
    document.getElementById("img2").setAttribute("src", "img/beans2.png");
    document.getElementById("img3").setAttribute("src", "img/beans3.png");
    document.getElementById("img4").setAttribute("src", "img/beans4.png");
    document.getElementById("img5").setAttribute("src", "img/beans5.png");
    document.getElementById("img6").setAttribute("src", "img/beans6.png");
    document.getElementById("img7").setAttribute("src", "img/beans7.png");
    document.getElementById("img8").setAttribute("src", "img/beans8.png");

    document.getElementById("title1").setAttribute("href", "#order");
    document.getElementById("title2").setAttribute("href", "#order");
    document.getElementById("title3").setAttribute("href", "#order");	
    document.getElementById("title4").setAttribute("href", "#order");
    document.getElementById("title5").setAttribute("href", "#order");
    document.getElementById("title6").setAttribute("href", "#order");	
    document.getElementById("title7").setAttribute("href", "#order");
    document.getElementById("title8").setAttribute("href", "#order");		    

    document.getElementById("title1").setAttribute("name", "classic");
    document.getElementById("title2").setAttribute("name", "guatemalan");
    document.getElementById("title3").setAttribute("name", "african");

    document.getElementById("title1").appendChild(document.createTextNode("Classic Blend"));
    document.getElementById("p_desc1").appendChild(document.createTextNode("We start with premium coffee beans from farms located in prime coffee-producing regions provide us with our distinctive gourmet beans. We batch roast our beans and then grind them extra fine in true European fashion. This distinctive fine grind unlocks the coffee’s full flavor, providing a rich full-bodied cup that is always smooth and never bitter. Melitta premium coffee’s unique quality is alive and bold in every sip. Discover The Flavor of Europe in Every Cup. Savor the flavor of gourmet European Café style coffee in your Keurig machine. The innovative cup design allows water to fully saturate the coffee, maximizing flavor extraction. The result is a bold and more flavorful coffee experience. Enjoy."));	
    document.getElementById("p_price1").appendChild(document.createTextNode("Price: $49.99"));
    document.getElementById("title2").appendChild(document.createTextNode("Guatemalan Blend"));
    document.getElementById("p_desc2").appendChild(document.createTextNode("Coffee beans grown in Guatemala typically have tasting notes indicating a full body and a rich chocolatey-cocoa flavor, and a toffee-like sweetness. Guatemalan coffees are true central American coffees. In particular the Strictly Hard Bean green coffees grown in the Atitlan and Antigua coffee growing regions in the country’s central highlands exhibit these qualities as well as a floral acidity that is often spicy or chocolaty. Some coffee reviews note that a lighter acidity is found among the coffees grown in mountain areas exposed to the Caribbean or exposed to the Pacific Ocean and these coffees tend to exhibit more of a fruity acidity and flavor."));
    document.getElementById("p_price2").appendChild(document.createTextNode("Price: $44.99"));
    document.getElementById("title3").appendChild(document.createTextNode("African Blend"));
    document.getElementById("p_desc3").appendChild(document.createTextNode("African Coffees tend to have sweet, fruity flavors which are balanced by a somewhat tart acidity. By blending the various African coffees together, these characteristics are emphasized. The African Blend is a medium to full-bodied blend of coffee beans grown exclusively in East Africa. Although coffee is grown in other parts of Africa, the best Arabica beans come from the high mountainous regions in the tropical belt of East Africa. The beans and brew emit a fragrant, fruity bouquet. Our passion for coffee began in Rwanda in East Africa, so it seems right to offer you a blend of coffees from this special coffee-producing region. We have chosen a mix of coffees that, together, gives you a memorable and enjoyable cup of coffee."));
    document.getElementById("p_price3").appendChild(document.createTextNode("Price: $64.99"));	
    document.getElementById("title4").appendChild(document.createTextNode("Coffea Arabica"));
    document.getElementById("p_desc4").appendChild(document.createTextNode("Coffea arabica is a species of Coffea originally indigenous tothe forests of thica is believed to be the first species of coffee to be cultivated, and is by far the dominant cultivar, representing some 70% of global production. Coffee produced from the ghlands of Ethiopia. It is also known as the \"coffee shrub of Arabia\", \"mountain coffee\", or \"arabica coffee\". C. arabica is believed to be the first species of coffee to be cultivated, and is by far the dominant cultivar, representing some 70% of global production. Coffee produced from the m the less acidic, more bitter, and more highly caffeinated robusta bean (C. canephora) makes up the preponderance of the balance. "));
    document.getElementById("p_price4").appendChild(document.createTextNode("Price: $48.99"));
 	document.getElementById("title5").appendChild(document.createTextNode("Coffea Dewevrei"));
    document.getElementById("p_desc5").appendChild(document.createTextNode("These are the higher quality beans and are referred to as gourmet coffee. They have half the amount of caffeine as Robusta and have more pleasing flavours and aromatic properties. Most Arabica bean varieties are name after their country or region in which they are found, or originated from. Other bean species include: benghalensis, Bengal coffee; Coffea congensis, Congo coffee; Coffea liberica, Liberian coffee; Coffea stenophylla, Sierra Leonian coffee; Coffea excelsia, another Liberian coffee; Coffea bonnieri; Coffea gallienii; and Coffea mogeneti, however these beans are non-existent in the export market. They are easier to grow and maintain, and they are also more disease resistant and produce a higher yield. "));
    document.getElementById("p_price5").appendChild(document.createTextNode("Price: $51.99"));	
    document.getElementById("title6").appendChild(document.createTextNode("Coffea Liberica"));
    document.getElementById("p_desc6").appendChild(document.createTextNode("Liberian coffee is an evergreen shrub or tree growing 5 - 20 metres tall. Long used by local people as the source of a stimulating drink, it is now cultivated in many tropical countries as a source of coffee although, because of its more bitter taste, the scale of production is far less than for C. Arabica. Liberian Coffee accounts for around 1% of commercially grown coffee. The taste and appearance of the beans and berries is similar to the more common coffee, although beans are often larger but contain a tough, difficult to shell skin, hindering their commercial uses. Today, the provinces of Batangas and Cavite in the Philippines are producers of a variety of liberica known as 'Baraco'."));
    document.getElementById("p_price6").appendChild(document.createTextNode("Price: $48.99"));
    document.getElementById("title7").appendChild(document.createTextNode("Coffea Kopi Luwak"));
    document.getElementById("p_desc7").appendChild(document.createTextNode("Kopi luwak or civet coffee, refers to the coffee that includes part-digested coffee cherries eaten and defecated by the Asian palm civet. Producers of the coffee beans argue that the process may improve coffee through two mechanisms, selection and digestion. Selection occurs if the civets choose to eat cherries. Digestive mechanisms may improve the flavor profile of the coffee beans that have been eaten. The civet eats the cherries for the fleshy pulp, then in the digestive tract, fermentation occurs. The civet's protease enzymes seep into the beans, making shorter peptides and more free amino acids. Passing through a civet's intestines the cherries are then defecated with other fecal matter and collected."));	
    document.getElementById("p_price7").appendChild(document.createTextNode("Price: $65.99"));
    document.getElementById("title8").appendChild(document.createTextNode("Coffea Canephora"));
    document.getElementById("p_desc8").appendChild(document.createTextNode("The plant has a shallow root system and grows as a robust tree or shrub to about 10 metres. It flowers irregularly, taking about 10–11 months for cherries to ripen, producing oval-shaped beans. The robusta plant has a greater crop yield than that of C. arabica, and contains more caffeine – 2.7% compared to arabica's 1.5%. As it is less susceptible to pests and disease, robusta needs much less herbicide and pesticide than arabica. Originating in upland forests in Ethiopia, C. canephora grows indigenously in Western and Central Africa from Liberia to Tanzania and south to Angola. Approximately 30% of the coffee produced in the world is robusta."));
    document.getElementById("p_price8").appendChild(document.createTextNode("Price: $50.99"));


}

tableCreate();