<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'web.magentatv.de',
  'creator_name' => 'Mutsch',
  'creation_date' => '2022-04-08',
  'rev_no' => 'R0',
  'timezone' => '+02:00',
  'culture' => 'de',
  'max_day' => '14.1',
  'rating_system' => 'FSK',
  'episodeOption' => '1',
  'url1' => 'https://api.prod.sngtv.magentatv.de/EPG/JSON/Authenticate',
  'requestOption1' => '2',
  'post_data1' => '{"areaid":"1","cnonce":"76f66e78bf361db7f00024349915aecd","mac":"6e4057fd-9512-4b05-b7b3-cfdc867cfae3","preSharedKeyID":"NGTV000001","subnetId":"4901","templatename":"NGTV","terminalid":"6e4057fd-9512-4b05-b7b3-cfdc867cfae3","terminaltype":"WEB-MTV","terminalvendor":"WebTV","timezone":"Europe/Berlin","usergroup":"-1","userType":3,"utcEnable":1}',
  'accept_header1' => 'application/json',
  'content_type1' => 'application/json',
  'referer_header1' => 'https://web.magentatv.de/',
  'host_header1' => 'api.prod.sngtv.magentatv.de',
  'origin_header1' => 'https://web.magentatv.de',
  'custom_header1' => 'X_CSRFToken:',
  'cookie_jar1' => 'on',
  'grabber_1' => 'on',
  'gpattern_1' => 'csrfToken":"(.*?)"',
  'url2' => 'https://api.prod.sngtv.magentatv.de/EPG/JSON/PlayBillList?userContentFilter=-375463788',
  'requestOption2' => '2',
  'post_data2' => '{"channelid":"##channel##","type":2,"offset":0,"count":-1,"isFillProgram":1,"properties":[{"name":"playbill","include":"ratingForeignsn,id,channelid,name,subName,starttime,endtime,cast,casts,country,producedate,ratingid,pictures,type,introduce,foreignsn,seriesID,genres,subNum,seasonNum"}],"endtime":"##stopdate2##235959","begintime":"##urldate2##000000"}',
  'accept_header2' => 'application/json',
  'content_type2' => 'application/json',
  'referer_header2' => 'https://web.magentatv.de/',
  'host_header2' => 'api.prod.sngtv.magentatv.de',
  'origin_header2' => 'https://web.magentatv.de',
  'custom_header2' => 'X_CSRFToken: ##grabber_1##',
  'urldate_format2' => 'Ymd',
  'stopdate_format2' => 'Ymd',
  'show' => '"type":"PRO(.*?)"id"',
  'start' => '"starttime":"(.*?) UTC',
  'start_format' => 'Y-m-d H:i:s',
  'stop' => '"endtime":"(.*?) UTC',
  'stop_format' => 'Y-m-d H:i:s',
  'title' => '"name":"(.*?)"',
  'subtitle' => '"subName":"(.*?)"|#|[| · S|]"seasonNum":"(.*?)"|#|[| E|]"subNum":"(.*?)"||#replace#^(· )||',
  'desc' => '"introduce"(.*?)","foreignsn"||#replace#(:"[A-Za-z0-9ÄÖÜäöüß]*\\s*\\d{4})##(:"[A-Za-z0-9ÄÖÜäöüß\\/\\-]*\\,\\s*\\w*\\s*\\d{4})##(:"\\w*,\\s*\\w*\\s*\\d{4})##(:"\\w*,\\s*\\Ö\\w*\\s\\d{4})##(Darsteller:.*)##(Moderation:.*)##(Gast:.*)##(:"\\w*\\s*\\w*\\s*\\w*,\\s*\\w*\\s*\\d{4})##(:"\\w*\\s*\\w*,\\s*\\w*\\s*\\d{4})##(:"[A-Za-z0-9ÄÖÜäöüß\\/\\-]*,\\s*[A-Za-z0-9ÄÖÜäöüß]*\\s*\\/\\s*[A-Za-z0-9ÄÖÜäöüß]*\\s*\\d{4})##(:"[A-Za-z0-9ÄÖÜäöüß\\/\\-]*,\\s*[A-Za-z0-9ÄÖÜäöüß]*\\s*\\/\\s*[A-Za-z0-9ÄÖÜäöüß]*\\s*\\/\\s*[A-Za-z0-9ÄÖÜäöüß]*\\s*\\d{4})##^(:")##( \\d* Min.*)||####################',
  'category' => '"genres":"(.*?)"||#replace#(,)||, ',
  'showicon' => '"rel":"image","href":"(.*?)","||#max#1',
  'production_date' => '"producedate":"(.*?)-',
  'actor' => '"castId":"\\d*","roleType":"0","castName":"(.*?)",||#replace#(,)||, ',
  'director' => '"castId":"\\d*","roleType":"1","castName":"(.*?)",||#replace#(,)||, ',
  'presenter' => '"castId":"\\d*","roleType":"7","castName":"(.*?)",||#replace#(,)||, ',
  'adapter' => 'Kamera: (.*?)",||#replace#(,)||, ',
  'guest' => '\\.Gäste: (.*?)\\.\\w',
  'country' => '"country":"(.*?)"||#upper#||#replace#(,)||/',
  'ccurl1' => 'https://api.prod.sngtv.magentatv.de/EPG/JSON/Authenticate',
  'ccrequestOption1' => '2',
  'ccpost_data1' => ' {"areaid":"1","cnonce":"76f66e78bf361db7f00024349915aecd","mac":"6e4057fd-9512-4b05-b7b3-cfdc867cfae3","preSharedKeyID":"NGTV000001","subnetId":"4901","templatename":"NGTV","terminalid":"6e4057fd-9512-4b05-b7b3-cfdc867cfae3","terminaltype":"WEB-MTV","terminalvendor":"WebTV","timezone":"Europe/Berlin","usergroup":"-1","userType":3,"utcEnable":1}',
  'ccaccept_header1' => 'application/json',
  'cccontent_type1' => 'application/json',
  'ccreferer_header1' => 'https://web.magentatv.de/',
  'cchost_header1' => 'api.prod.sngtv.magentatv.de',
  'ccorigin_header1' => 'https://web.magentatv.de',
  'cccookie_jar1' => 'on',
  'ccgrabber_1' => 'on',
  'ccgpattern_1' => 'csrfToken":"(.*?)"',
  'ccurl2' => 'https://api.prod.sngtv.magentatv.de/EPG/JSON/AllChannel?userContentListFilter=-1689804946',
  'ccrequestOption2' => '1',
  'ccpost_data2' => '{"channelNamespace":2,"filterlist":[{"key":"IsHide","value":"-1"}],"metaDataVer":"Channel/1.1","properties":[{"include":"/channellist/logicalChannel/contentId,/channellist/logicalChannel/name,/channellist/logicalChannel/chanNo,/channellist/logicalChannel/externalCode,/channellist/logicalChannel/categoryIds,/channellist/logicalChannel/introduce,/channellist/logicalChannel/pictures/picture/href,/channellist/logicalChannel/pictures/picture/imageType,/channellist/logicalChannel/physicalChannels/physicalChannel/mediaId,/channellist/logicalChannel/physicalChannels/physicalChannel/definition,/channellist/logicalChannel/physicalChannels/physicalChannel/externalCode,/channellist/logicalChannel/physicalChannels/physicalChannel/fileFormat","name":"logicalChannel"}],"returnSatChannel":0}',
  'ccaccept_header2' => 'application/json',
  'cccontent_type2' => 'application/json',
  'ccreferer_header2' => 'https://web.magentatv.de/',
  'cchost_header2' => 'api.prod.sngtv.magentatv.de',
  'ccorigin_header2' => 'https://web.magentatv.de',
  'cccustom_header2' => 'X_CSRFToken: ##grabber_1##',
  'ccchannel_block' => '\\{"co(.*?)"]}',
  'ccchannel_id' => 'entId":"(.*?)"',
  'ccchannel_name' => '"name":"(.*?)"',
  'ccchannel_logo' => '\\[{"href":"(.*?)"',
);
?>