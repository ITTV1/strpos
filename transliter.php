<?php
# �������������� ����� � ���� �������� �� �������� (��������)
  function transliterate($a) {
    $a = strtr($a,
      "����������������������������������������������",
      "abvgdegziyklmnoprstufyeABVGDEGZIYKLMNOPRSTUFYE"
    );
    $a = strtr($a, array(
      '�'=>"yo",    '�'=>"h",  '�'=>"ts",  '�'=>"ch", '�'=>"sh",
      '�'=>"shch",  '�'=>'',   '�'=>'',    '�'=>"yu", '�'=>"ya",
      '�'=>"Yo",    '�'=>"H",  '�'=>"Ts",  '�'=>"Ch", '�'=>"Sh",
      '�'=>"Shch",  '�'=>'',   '�'=>'',    '�'=>"Yu", '�'=>"Ya",
    ));
    return $a;
  }
  echo transliterate("�������� �� ����� IT TV. ������ �����. ������������� �� �����");
?>
