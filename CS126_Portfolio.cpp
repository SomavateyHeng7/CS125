#include <iostream> //   August 19th deadline
#include <vector>   //   display/show in the text file
#include <string>
#include <string.h>     // one tab is 8 space in C++ or vs code
#include <fstream>      // one tab in fstream is 6spaces


using namespace std;

    char selecty;
    int endtask = 0;
    int makefirstrow = 0;

    vector <string> name;
    vector <string> address;
    vector <string> street;
    vector <string> district;
    vector <string> city;
    vector <string> country;
    vector <string> contact;
    vector <string> landline;

    string fname;
    string file = "filesforportfolio\\";
    string txt = ".txt";
    string total = file + txt;
    string totalread;

void Enter();
void output();
void selec();
void yn();
void bn();
void remove();
void yn1();
void conversion();
void deletefile();
void displaybackorno();
void menu();
void makingfirst();

int main()
{   
    if (endtask == 1)
    {
        return 0;
    }
    if (makefirstrow == 0)
    {
        makingfirst();
    }
    
    menu();
}


void Enter()
{
    char y_n;
    
    string nam, add, str, dis, cit, cou, con, lan;

    cin.ignore();

    cout << "Enter name: ";
    getline(cin, nam);
    name.push_back(nam);

    cout << "Enter address: ";
    getline(cin, add);
    address.push_back(add);

    cout << "Enter street: ";
    getline(cin, str);
    street.push_back(str);

    cout << "Enter district: ";
    getline(cin, dis);
    district.push_back(dis);

    cout << "Enter city: ";
    getline(cin, cit);
    city.push_back(cit);

    cout << "Enter country: ";
    getline(cin, cou);
    country.push_back(cou);

    cout << "Enter contact: ";
    getline(cin, con);
    contact.push_back(con);

    cout << "Enter landline: ";
    getline(cin, lan);
    landline.push_back(lan);
    
    cout << "\n\nName: " << nam << "\nAddress: " << add << "\nStreet: " << str << "\nDistrict: " << dis << "\nCity: " << cit << "\nCountry: " << cou << "\nContact: " << con << "\nLandline: " << lan;
    cout << "\nIs the information correct? (y/n)\nSelection: ";
    cin >> y_n;
    if(isalpha(y_n))
    {
        tolower(y_n);
    }
    else
    {
        yn();
        y_n = selecty;
    }

    if (y_n == 'n')
    {
        name.pop_back();
        address.pop_back();
        street.pop_back();
        district.pop_back();
        city.pop_back();
        country.pop_back();
        contact.pop_back();
        landline.pop_back();
        
        cout << "\nInformation entered above has been removed!\n";
    }
    else if(y_n == 'y')
    {
        if (name.size() > 0)
        {
            conversion();
        }
    }
    else
    {
        yn();
        y_n = selecty;
        if (y_n == 'n')
        {
            name.pop_back();
            address.pop_back();
            street.pop_back();
            district.pop_back();
            city.pop_back();
            country.pop_back();
            contact.pop_back();
            landline.pop_back();
            
            cout << "\nInformation entered above has been removed!\n";
        }
        else if(y_n == 'y')
        {
            if (name.size() > 0)
            {
                conversion();
            }
        }
    }
    displaybackorno();
}

void output()
{
    int size;
    size = name.size();
    
    if (size > 0)
    {
        cout << endl;

            string outputdes;
    
            ifstream txtfile(totalread);

                while (getline(txtfile, outputdes))
                {
                    cout << outputdes << endl;
                }
                txtfile.close();
            
            // cout << "\nInformation of person no." << i+1 << ": \nName: " << name[i] << "\nAddress: " << address[i] << "\nStreet: " << street[i] << "\nDistrict: " << district[i]
            // << "\nCity: " << city[i] << "\nCountry: " << country[i] << "\nContact: " << contact[i] << "\nLandline: " << landline[i] << endl;
    }


    else if (size == 0)
    {
        cout << "\nThere's no information currently stored in the file yet.\n";
    }
    
    main();
}


void selec()
{
    char selecto;
    cout << "\nInvalid input, Please try again.";
    cout << "\nWhat do you want to do in the Address Book:\n[1] Add New\n[2] Delete (latest)\n[3] View all the info\n[4] Exit\nSelection: ";
    cin.ignore();
    cin >> selecto;
    selecty = selecto;
    if (selecto < '1' || selecto > '4')
    {
        selec();
    }
    
    return;
}

void yn()
{
    char selecto;
    cout << "\nInvalid input, Is the information correct? (y/n)\nSelection: ";
    cin.ignore();
    cin >> selecto;
    towlower(selecto);
    selecty = selecto;
    if (selecto == 'n' || selecto == 'y')
    {
        return;
    }
    else
    {
        yn();
    }
}

void bn()
{
    char selecto;
    cout << "Invalid input!\nDo you want to return to the Main Menu?\n[1] Return to Main Menu\n[2] Exit\nSelection: ";
    cin.ignore();
    cin >> selecto;
    selecty = selecto;
    if (selecto > '2' || selecto < '1')
    {
        bn();
    }
    return;
}

void remove()
{
    int size;
    char y_n;
    size = name.size();

    if (size == 0)
    {
        cout << "\nThere's no Information written yet!";
    }
    
    if (size > 0)
    {
        cout << "\nThe last info in file is:";
        cout << "\nName: " << name[size-1] << "\nAddress: " << address[size-1] << "\nStreet: " << street[size-1] << "\nDistrict: " << district[size-1]
             << "\nCity: " << city[size-1] << "\nCountry: " << country[size-1] << "\nContact: " << contact[size-1] << "\nLandline: " << landline[size-1] << endl;
        cout << "\nDo you want to delete this information? (y/n)\nSelection: ";
        cin >> y_n;

        if (isalpha(y_n))
        {
            tolower(y_n);
        }
        else
        {
            yn1();
            y_n = selecty;
        }
        
        if (y_n == 'n')
        {
            main();
        }
        else if (y_n == 'y')
        {
            deletefile();
            name.pop_back();
            address.pop_back();
            street.pop_back();
            district.pop_back();
            city.pop_back();
            country.pop_back();
            contact.pop_back();
            landline.pop_back();
            
            cout << "\nInformation entered above has been removed!\n";
        }
        else
        {
            yn1();
            y_n = selecty;
            if (y_n == 'n')
            {
                main();
            }
            else if (y_n == 'y')
            {
                deletefile();
                name.pop_back();
                address.pop_back();
                street.pop_back();
                district.pop_back();
                city.pop_back();
                country.pop_back();
                contact.pop_back();
                landline.pop_back();
                
                cout << "\nInformation entered above has been removed!\n";
            }
        }
    }

    main();
}

void yn1()
{
    char selecto;
    cout << "\nInvalid input, Do you want to delete this information? (y/n)\nSelection: ";
    cin.ignore();
    cin >> selecto;
    towlower(selecto);
    selecty = selecto;
    if (selecto == 'n' || selecto == 'y')
    {
        return;
    }
    else
    {
        yn1();
    }
}

void conversion()
{
    int amount = name.size();
    ofstream make(total, ios::app);
    make << endl << name[amount-1];
    if (name[amount-1].length() < 30)
    {
        make << "\t";
        if (name[amount-1].length() < 24)
        {
            make << "\t";
            if (name[amount-1].length() < 18)
            {
                make << "\t";
                if (name[amount-1].length() < 12)
                {
                    make << "\t";
                    if (name[amount-1].length() < 6)
                    {
                        make << "\t";
                    }
                }
            }    
        }
    }
    
    make << address[amount-1];
    if (address[amount-1].length() < 18)
    {
        make << "\t";
        if (address[amount-1].length() < 12)
        {
            make << "\t";
            if (address[amount-1].length() < 6)
            {
                make << "\t";
            }
        }
    }
    
    make << street[amount-1];
    if (street[amount-1].length() < 18)
    {
        make << "\t";
        if (street[amount-1].length() < 12)
        {
            make << "\t";
            if (street[amount-1].length() < 6)
            {
                make << "\t";
            }
        }
    }
    
    make << district[amount-1];
    if (district[amount-1].length() < 18)
    {
        make << "\t";
        if (district[amount-1].length() < 12)
        {
            make << "\t";
            if (district[amount-1].length() < 6)
            {
                make << "\t";
            }
        }
    }
    
    make << city[amount-1];
    if (city[amount-1].length() < 18)
    {
        make << "\t";
        if (city[amount-1].length() < 12)
        {
            make << "\t";
            if (city[amount-1].length() < 6)
            {
                make << "\t";
            }
        }
        
    }
    
    make << country[amount-1];
    if (country[amount-1].length() < 18)
    {
        make << "\t";
        if (country[amount-1].length() < 12)
        {
            make << "\t";
            if (country[amount-1].length() < 6)
            {
                make << "\t";
            }
        }
    }
    
    make << contact[amount-1];
    if (contact[amount-1].length() < 18)
    {
        make << "\t";
        if (contact[amount-1].length() < 12)
        {
            make << "\t";
            if (contact[amount-1].length() < 6)
            {
                make << "\t";
            }
        }
    }
    
    make << landline[amount-1];
    make.close();

    
    ofstream fileforread(totalread, ios::app);
    fileforread << endl << name[amount-1];
    if (name[amount-1].length() < 32)
    {
        fileforread << "\t";
        if (name[amount-1].length() < 24)
        {
            fileforread << "\t";
            if (name[amount-1].length() < 16)
            {
                fileforread << "\t";
                if (name[amount-1].length() < 8)
                {
                    fileforread << "\t";
                }
            }    
        }
    }
    
    fileforread << address[amount-1];
    if (address[amount-1].length() < 16)
    {
        fileforread << "\t";
        if (address[amount-1].length() < 8)
        {
            fileforread << "\t";
        }
    }
    
    fileforread << street[amount-1];
    if (street[amount-1].length() < 16)
    {
        fileforread << "\t";
        if (street[amount-1].length() < 8)
        {
            fileforread << "\t";
        }
    }
    
    fileforread << district[amount-1];
    if (district[amount-1].length() < 24)
    {
        fileforread << "\t";
        if (district[amount-1].length() < 16)
        {
            fileforread << "\t";
            if (district[amount-1].length() < 8)
            {
                fileforread << "\t";
            }
        }
    }
    
    fileforread << city[amount-1];
    if (city[amount-1].length() < 24)
    {
        fileforread << "\t";
        if (city[amount-1].length() < 16)
        {
            fileforread << "\t";
            if (city[amount-1].length() < 8)
            {
                fileforread << "\t";
            }
        }
        
    }
    
    fileforread << country[amount-1];
    if (country[amount-1].length() < 16)
    {
        fileforread << "\t";
        if (country[amount-1].length() < 8)
        {
            fileforread << "\t";
        }
    }
    
    fileforread << contact[amount-1];
    if (contact[amount-1].length() < 24)
    {
        fileforread << "\t";
        if (contact[amount-1].length() < 16)
        {
            fileforread << "\t";
            if (contact[amount-1].length() < 8)
            {
                fileforread << "\t";
            }
        }
    }
    
    fileforread << landline[amount-1];
    fileforread.close();
}

void deletefile()
{
    ifstream readfile(total);    
    ofstream newfile;                
    newfile.open("temp.txt", ios::out); 
  
    char ch; 
    int line = 1, removeline = name.size()+1;            
    while(readfile.get(ch)) 
    {      
        if(ch == '\n') 
        {
            line++; 
        } 
        if(line != removeline)
        {
            newfile << ch;
        }
    } 
    newfile.close();  
    readfile.close();
    char data[total.length()] = {};
    for (int i = 0; i < total.length(); i++)
    {
        data[i] = total[i];
    }
      
    remove(data);        
    rename("temp.txt", data);
    
    ifstream reading(totalread);    
    ofstream othernewfile;                
    othernewfile.open("temp.txt", ios::out); 
  
    char cha; 
    int nline = 1;          
    while(reading.get(cha)) 
    {      
        if(ch == '\n') 
        {
            line++; 
        } 
        if(nline != removeline)
        {
            othernewfile << ch;
        }
    } 
    othernewfile.close();  
    reading.close();
    char dataread[totalread.length()] = {};
    for (int i = 0; i < totalread.length(); i++)
    {
        dataread[i] = totalread[i];
    }
      
    remove(dataread);        
    rename("temp.txt", dataread);
    return;
}

void displaybackorno()
{
    char backorno;
    cout << "\nDo you want to return to the Main Menu?\n[1] Return to Main Menu\n[2] Exit\nSelection: ";
    cin >> backorno;
    if (backorno > '2' || backorno < '1')
    {
        bn();
        backorno = selecty;
    }
    
    switch (backorno)
    {
    case '1':
    {
        main();
    }
    break;
    case '2':
    {
        break;
    }
    }
}

void menu()
{
    char select;
    cout << "\nWhat do you want to do in the Address Book:\n[1] Add New\n[2] Delete (latest)\n[3] View all the info\n[4] Exit\nSelection: ";
    cin >> select;
    
    if (select < '1' || select > '5')
    {
        selec();
        select = selecty;
    }

    switch (select)
    {
        case '1':
        {
            Enter();
        }    
        break;
        case '2':
        {
            remove();
        }
        break;
        case '3':
        {
            output();
        }
        break;
        case '4':
        {
            endtask = 1;
        }
        break;
    }

}

void makingfirst()
{
    
    cout << "Enter file name to store Data:\nFile Name => ";
    getline(cin, fname);
    total = file + fname + txt;
    totalread = file + fname + "(READ FOR OUTPUT)" + txt;
    ofstream make(total);
    make << "Name\t\t\t\t\t";
    make << "Address\t\t";
    make << "Street\t\t";
    make << "District\t\t";
    make << "City\t\t\t"; 
    make << "Country\t\t";
    make << "Contact\t\t";
    make << "Landline";
    make.close();

    ofstream fileforread(totalread);
    fileforread << "Name\t\t\t\t";
    fileforread << "Address\t\t";
    fileforread << "Street\t\t";
    fileforread << "District\t\t";
    fileforread << "City\t\t\t"; 
    fileforread << "Country\t\t";
    fileforread << "Contact\t\t";
    fileforread << "Landline";
    fileforread.close();

    makefirstrow = 1;
    return;
}