import java.util.*;

public class ground
{
    public static void main(String[] args)
    {
        System.out.println("Input: ");
        
        Scanner console = new Scanner(System.in);
        
        int numRuns = console.nextInt();
        console.nextLine();
        
        boolean end = true;
        
        for(int i = 0; i < numRuns; i++)
        {
            int numCol = console.nextInt();
            console.nextLine();
            
            int[] diffList = new int[numCol];
            
            for (int j = 0; j < numCol; j++)
            {
                String s = console.nextLine();
                
                Scanner splitter = new Scanner(s);
                int temp1 = Integer.parseInt(splitter.next());
                int temp2 = Integer.parseInt(splitter.next());
                
                diffList[j] = Math.abs(temp1 - temp2);
            }
            int diff = diffList[0];
            for (int j = 0; j < numCol; j++)
            {
                if (diffList[j] != diff)
                {
                    end = false;
                }
            }
            if (end == true)
            {
                System.out.println("yes");
            }
            else if (end == false)
            {
                System.out.println("no");
            }
            else
            {
                System.out.println("error");
            }
        }
    }
}