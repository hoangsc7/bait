import xml.etree.ElementTree as et
class thongtin:
    def __init__(self,masach,tensach,tacgia,sotrang,namxb,nhaxb):
        self.__masach = masach
        self.__tensach = tensach
        self.__tacgia = tacgia
        self.__sotrang = sotrang
        self.__namxb = namxb
        self.__nhaxb = nhaxb
    def __str__(self):
        return f'thongtin[masach = {self.__masach}, tensach = {self.__tensach},'\
                f' tacgia = {self.__tacgia},sotrang={self.__sotrang},namxb={self.__namxb},nhaxb={self.__nhaxb}]'
def parse_xml(file_name):
    tree = et.parse(file_name)
    root = tree.getroot()
    menu = []
    for item in root:
        masach = item[0].text
        tensach = item[1].text
        tacgia = item[2].text
        sotrang = item[3].text
        namxb = item[4].text
        nhaxb = item[5].text
        menu.append(thongtin(masach,tensach,tacgia,sotrang,namxb,nhaxb))
    return menu
def show_menu(menu):
    for item in menu:
        print(item)
if __name__ =='__main__':
    file = 'sach\sach.xml'
    infor_menu = parse_xml(file)
    print ('=========================')
    print ('Danh sach may tinh :')
    show_menu(infor_menu)