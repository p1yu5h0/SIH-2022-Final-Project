import 'package:flutter/material.dart';
import 'package:sih_translator/screens/image_camera_translation.dart';
import 'package:sih_translator/screens/pdf_translator.dart';
import 'package:sih_translator/screens/speech.dart';
import 'package:sih_translator/screens/text_translator.dart';

class HomePageP extends StatefulWidget {
  @override
  _HomePagePState createState() => _HomePagePState();
}

class _HomePagePState extends State<HomePageP> {
  int selectedPage = 0;

  final _pageOptions = [
    PdfTranslator(),
    Text_Converter(),
    SpeechText(),
    ImageCameraTranslation()
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
        backgroundColor: Colors.white,
        body: _pageOptions[selectedPage],
        bottomNavigationBar: BottomNavigationBar(
          items: [
            BottomNavigationBarItem(icon: Icon(Icons.text_snippet_outlined, size: 30), label: 'Pdf'),
            BottomNavigationBarItem(icon: Icon(Icons.text_fields_rounded, size: 30),label: 'Text'),
            BottomNavigationBarItem(icon: Icon(Icons.mic, size: 30), label: 'Speech'),
            BottomNavigationBarItem(icon: Icon(Icons.image, size: 30), label: 'Image')
          ],
          selectedItemColor: Color.fromRGBO(	248,113,107, 1),
          elevation: 5.0,
          unselectedItemColor: Color.fromRGBO(	85, 170, 17, 1),
          currentIndex: selectedPage,
          backgroundColor: Colors.white,
          onTap: (index){
            setState(() {
              selectedPage = index;
            });
          },
        )
    );
  }
}