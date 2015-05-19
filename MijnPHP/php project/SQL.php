

SELECT *
  FROM factuur 
  
  LEFT JOIN afnemer
  ON factuur.afnemernummer = afnemer.afnemernummer
  WHERE factuur.factuurdatum = DATUM
  GROUP BY afnemer.plaats
  ORDER BY afnemer.naam


  
  SELECT *
      FROM artikel 
  
  LEFT JOIN soort
  ON artikel.soortnr = soort.soortnr
  WHERE artikel.adviesverkoopprijs = PRIJS
  AND artikel.opvoorraad >= AANTAL
  SELECT *
    FROM factuur 
  
  LEFT JOIN afnemer
  ON factuur.afnemernummer = afnemer.afnemernummer
  WHERE factuur.factuurdatum = DATUM
  GROUP BY afnemer.plaats
  ORDER BY afnemer.naam


  
  SELECT *
   FROM factuur 
  LEFT JOIN factuurregel
  ON factuur.factuurnummer = factuurregel.factuurnummer
  
  LEFT JOIN artikel
  ON factuurregel.artikelcode = artikel.artikelcode
  
  LEFT JOIN soort
  ON artikel.soortnr = soort.soortnr
     
  LEFT JOIN afnemer
  ON factuur.afnemernummer = afnemer.afnemernummer
  WHERE factuur.factuurdatum = DATUM
  GROUP BY afnemer.regio


  
  SELECT Naam 
  FROM soort
    FROM artikel 
  
  LEFT JOIN soort
  ON artikel.soortnr = soort.soortnr
  
  AND artikel.opvoorraad >= VOORRAAD
  
  ORDER BY artikel.adviesverkoopprijs
  
   
  SELECT COUNT(*) AS total 
  FROM afnemer
 