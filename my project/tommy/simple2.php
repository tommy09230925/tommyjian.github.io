<?php
$url ="https://data.tycg.gov.tw/opendata/datalist/datasetMeta/download?id=f4cc0b12-86ac-40f9-8745-885bddc18f79&rid=0daad6e6-0632-44f5-bd25-5e1de1e9146f";
$json = file_get_contents($url);
//print $json; 
$json_data = json_decode($json,true);
print count($json_data["parkingLots"]);
print "<table>";
print "<th>停車場名稱</th>";
print "<th>停車場數量</th>";
print "<th>停車場剩餘數量</th>";
for ($i=0; $i <count($json_data["parkingLots"]); $i++) { 
    print "<tr>";
    print "<td>" . $json_data["parkingLots"][$i]["parkName"] . "</td>";
    print "<td>" . $json_data["parkingLots"][$i]["totalSpace"] . "</td>";
    print "<td>" . $json_data["parkingLots"][$i]["surplusSpace"] . "</td>";
    print "</tr>";

}
print "</table>";

 ?>
