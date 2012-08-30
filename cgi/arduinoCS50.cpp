#include <iostream>
#include <fstream>
#include <cstdio>
#include <sstream>
#include <cstdlib>
#include <vector>

using namespace std;

#define MAX_Q 10

//num is the hash entry
typedef struct solution 
{
    int num;
    int pin;
    int val;
    int is_challenge;
    string error;
    string hash;
} solution;

class ArduinoCS50
{
    int problem_id;
    int solution_id;
    int problem_count;
	solution *answers;

// public w/ constructor
public:
    ArduinoCS50(int pid, solution *arr) 
	{
		answers    = arr;
		problem_id = pid;
		load();
	}
    void check(int id)
	{
		solution_id = id;
	    get_solution();
	}

// protected 
protected:
	
	void get_solution() 
	{
		
		for(int i=0;i<MAX_Q;i++)
		{
			solution s = answers[i];
			// this is where arduino checks go
	        (1 == s.val) ? write(s.hash) : write(s.error);
		}

    };

private:    
	void load() 
	{
		int answer_index = 0;
		string line;
		ifstream fsolution ("solution.txt");
		if(fsolution.is_open()) 
		{
			while(fsolution.good())
			{
				getline(fsolution,line);
				std::vector<std::string> strings;
				std::istringstream f(line);
				std::string st;
				
				solution s;
				while (std::getline(f,st,'^'))
				{
					std::cout << st << std::endl;
					strings.push_back(st);
				}

				for(int i=0,n=strings.size();i<n;i++) 
				{
					std::stringstream s_str(strings[i]);

					switch(i)
					{
						case 0:
						s_str >> s.num;
						case 1:
						s_str >> s.pin;
							break;
						case 2:
						s_str >> s.val;
							break;
						case 3:
						s_str >> s.is_challenge;
							break;
						case 4:
						s_str >> s.error;
							break;
						case 5:
						s_str >> s.hash;
							break;
						default:

						break;
					}	
				}
				answers[answer_index] = s;		
				answer_index++;
			}
			fsolution.close();
		}
		else
		{
			cout << "unable to open solution file";
		}
	}
	void write(string val) 
	{
		
			ofstream results_file;
			results_file.open("results.txt", ios::out | ios::app);
		
			if (results_file.is_open())
				results_file << val << "\n";
			else
				cout << "Unable to open results file.";
			
			results_file.close();
	}
};

// main to see if it will compile
int main(void)
{
	if(remove("results.txt") == 0)
		cout << "previous results file removed\n";
	
	solution answers_arr[MAX_Q];	

  	ArduinoCS50 arduino (1, answers_arr);

	arduino.check(0);

  	return 0;
}
