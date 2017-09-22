import java.util.*;

public class broNum
{
    public static void main (String[] args)
    {
        System.out.println("How many?");
        
        Scanner console = new Scanner(System.in);
        
        int inputNum = console.nextInt();
        
        int outputList[] = new int[inputNum];
        
        for (int i = 0; i < inputNum; i++)
        {
            String s = console.next();
            
            //if the word is 5 letters, then it has to be three/3
            if (s.length() >= 5)
            {
                outputList[i] = 3;
            }
            
            char l1 = s.charAt(0);
            char l2 = s.charAt(1);
            char l3 = s.charAt(2);
            
            char o = 'o';
            char n = 'n';
            char e = 'e';
            
            char t = 't';
            char w = 'w';
            
            //determining the word typed
            if (l1 == o && l2 == n) || (l1 == o && l3 == e) || (l2 == n && l3 == e)
            {
                outputList[i] = 1;
            }
            
            else if (l1 == t && l2 == w) || (l1 == t && l3 == o) || (l2 == w && l3 == o)
            {
                outputList[i] = 2;
            }
        }
        
        for (int i = 0; i < inputNum; i++)
        {
            System.out.println(outputList[i]);
        }
    }
}