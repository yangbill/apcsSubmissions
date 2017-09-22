import java.util.*;

public class mrBean
{
    public static void main(String[] args)
    {
        System.out.println("Input: ");
        
        Scanner console = new Scanner(System.in);
        Scanner splitter;
        int num = console.nextInt();
        console.nextLine();
        
        boolean[] end = new boolean[num];

        for (int i = 0; i < num; i++)
        {
            String s = console.nextLine();
            splitter = new Scanner(s);
            
            end[i] = true;
            for (int j = 0; j < 3; j++)
            {
                int temp = Integer.parseInt(splitter.next());
                
                if (temp > 20)
                {
                    end[i] = false;
                }
            }
        }
        
        for (int i = 0; i < num; i++)
        {
            String output;
            if (end[i] == true)
            {
                output = "good";
            }
            else
            {
                output = "bad";
            }
            System.out.println("Case " + (i+1) + ": " + output);
        }
    }
}