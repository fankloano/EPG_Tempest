<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'Gracenote_DE_Amazon',
  'creator_name' => 'Alex',
  'creation_date' => '2024-03-15',
  'rev_no' => 'R0',
  'timezone' => '+01:00',
  'culture' => 'de',
  'max_day' => '9.1',
  'url1' => 'http://data.tmsapi.com/v1.1/stations/##channel##/airings?startDateTime=##urldate1##T00:00Z&endDateTime=##stopdate1##T00:00Z&imageAspectTV=4x3&api_key=n829qtk58c7ym5pxdch5smup',
  'requestOption1' => '1',
  'urldate_format1' => 'Y-m-d',
  'stopdate_format1' => 'Y-m-d',
  'show' => '{"sta(.*?)}}}',
  'start' => 'rtTime":"(.*?)Z"||#replace#(T)||#date#+1hour',
  'start_format' => 'Y-m-dH:i',
  'stop' => '"endTime":"(.*?)Z"||#replace#(T)||#date#+1hour',
  'stop_format' => 'Y-m-dH:i',
  'title' => '"title":"(.*?)"',
  'subtitle' => '"episodeTitle":"(.*?)",|"eventTitle":"(.*?)",',
  'desc' => '"longDescription":"(.*?)"',
  'category' => '"genres":\\["(.*?)"]||#replace#(",")||, ',
  'showicon' => ',"uri":"(.*?)"||#max#1',
  'season' => '"seasonNum":(.*?),',
  'episode' => '"episodeNum":(.*?),',
  'channel_logo' => '||#add###cclogo##',
  'production_date' => '"releaseYear":(.*?),',
  'actor' => '"topCast":\\["(.*?)"]||#replace#(",")||, ',
  'director' => '"directors":\\["(.*?)"]||#replace#(",")||, ',
  'rating' => 'Fernsehen","code":"(.*?)"||#addend#+||#exclude#0',
  'review' => '"tmsId":"(.*?)"',
  'ccurl1' => 'http://data.tmsapi.com/v1.1/lineups/DEU-1008147-DEFAULT/channels?api_key=n829qtk58c7ym5pxdch5smup',
  'ccrequestOption1' => '1',
  'ccchannel_block' => '{"stat(.*?)}}',
  'ccchannel_id' => 'ionId":"(.*?)"',
  'ccchannel_name' => '"callSign":"(.*?)"',
  'ccchannel_logo' => '"uri":"(.*?)"',
);
?>